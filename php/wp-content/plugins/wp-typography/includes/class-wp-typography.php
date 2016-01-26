<?php

/**
 *  This file is part of wp-Typography.
 *
 *	Copyright 2014-2015 Peter Putzer.
 *	Copyright 2012-2013 Marie Hogebrandt.
 *	Coypright 2009-2011 KINGdesk, LLC.
 *
 *	This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; either version 2
 *  of the License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 *  ***
 *
 *  @package wpTypography
 *  @author Jeffrey D. King <jeff@kingdesk.com>
 *  @author Peter Putzer <github@mundschenk.at>
 *  @license http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Autoload parser classes
 */
require_once dirname( __DIR__ ) . '/php-typography/php-typography-autoload.php';

/**
 * Main wp-Typography plugin class. All WordPress specific code goes here.
 */
class WP_Typography {

	/**
	 * The full version string of the plugin.
	 */
	private $version;

	/**
	 * A byte-encoded version number used as part of the key for transient caching
	 */
	private $version_hash;

	/**
	 * The result of plugin_basename() for the main plugin file (relative from plugins folder).
	 */
	private $local_plugin_path;

	/**
	 * A hash containing the various plugin settings.
	 */
	private $settings;

	/**
	 * The PHP_Typography instance doing the actual work.
	 */
	private $php_typo;

	/**
	 * The transients set by the plugin (to clear on update).
	 *
	 * @var array A hash with the transient keys set by the plugin stored as ( $key => true ).
	 */
	private $transients = array();

	/**
	 * The PHP_Typography configuration is not changed after initialization, so the settings hash can be cached.
	 *
	 * @var string The settings hash for the PHP_Typography instance
	 */
	private $cached_settings_hash;

	/**
	 * An array of settings with their default value.
	 *
	 * @var array
	 */
	private $default_settings;

	/**
	 * The admin side handler object.
	 *
	 * @var WP_Typography_Admin
	 */
	private $admin;

	/**
	 * The priority for our filter hooks.
	 *
	 * @var number
	 */
	private $filter_priority = 9999;

	/**
	 * Sets up a new wpTypography object.
	 *
	 * @param string $version  The full plugin version string (e.g. "3.0.0-beta.2")
	 * @param string $basename The result of plugin_basename() for the main plugin file.
	 */
	function __construct( $version, $basename = 'wp-typography/wp-typography.php' ) {
		// basic set-up
		$this->version           = $version;
		$this->version_hash      = $this->hash_version_string( $version );
		$this->local_plugin_path = $basename;
		$this->transients        = get_option( 'typo_transient_keys', array() );

		// admin handler
		$this->admin             = new WP_Typography_Admin( $basename, $this );
		$this->default_settings  = $this->admin->get_default_settings();
	}

	/**
	 * Start the plugin for real.
	 */
	function run() {
		// ensure that our translations are loaded
		add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );

		// load settings
		add_action( 'init', array( $this, 'init') );

		// also run the back- end frontend
		$this->admin->run();
	}

	/**
	 * Load the settings from the option table.
	 */
	function init() {
		// restore defaults if necessary
		if ( get_option( 'typo_restore_defaults' ) ) {  // any truthy value will do
			$this->set_default_options( true );
		}

		// clear cache if necessary
		if ( get_option( 'typo_clear_cache' ) ) {  // any truthy value will do
			$this->clear_cache();
		}

		// load settings
		foreach ( $this->default_settings as $key => $value ) {
			$this->settings[ $key ] = get_option( $key );
		}

		// Remove default Texturize filter if it conflicts.
		if ( $this->settings['typo_smart_characters'] && ! is_admin() ) {
			remove_filter( 'category_description', 'wptexturize' ); // TODO: necessary?
			remove_filter( 'single_post_title',    'wptexturize' ); // TODO: necessary?
			remove_filter( 'comment_author',       'wptexturize' );
			remove_filter( 'comment_text',         'wptexturize' );
			remove_filter( 'the_title',            'wptexturize' );
			remove_filter( 'the_content',          'wptexturize' );
			remove_filter( 'the_excerpt',          'wptexturize' );
			remove_filter( 'widget_text',          'wptexturize' );
			remove_filter( 'widget_title',         'wptexturize' );
		}

		// apply our filters
		if ( ! is_admin() ) {
			// removed because it caused issues for feeds
			// add_filter( 'bloginfo', array($this, 'processBloginfo'), 9999);
			// add_filter( 'wp_title', 'strip_tags', 9999);
			// add_filter( 'single_post_title', 'strip_tags', 9999);
			add_filter( 'comment_author', array( $this, 'process' ),       $this->filter_priority );
			add_filter( 'comment_text',   array( $this, 'process' ),       $this->filter_priority );
			add_filter( 'the_title',      array( $this, 'process_title' ), $this->filter_priority );
			add_filter( 'the_content',    array( $this, 'process' ),       $this->filter_priority );
			add_filter( 'the_excerpt',    array( $this, 'process' ),       $this->filter_priority );
			add_filter( 'widget_text',    array( $this, 'process' ),       $this->filter_priority );
			add_filter( 'widget_title',   array( $this, 'process_title' ), $this->filter_priority );
		}

		// add IE6 zero-width-space removal CSS Hook styling
		add_action( 'wp_head', array( $this, 'add_wp_head' ) );
	}


	/**
	 * Process title text fragment.
	 *
	 * Calls `process( $text, true )`.
	 *
	 * @param string $text
	 */
	function process_title( $text ) {
		return $this->process( $text, true );
	}

	/**
	 * Process text fragment.
	 *
	 * @param string $text
	 * @param boolean $is_title Default false.
	 */
	function process( $text, $is_title = false ) {
		$typo = $this->get_php_typo();
		$transient = 'typo_' . base64_encode( md5( $text, true ) . $this->cached_settings_hash );

		if ( is_feed() ) { // feed readers can be pretty stupid
			$transient .= 'f' . ( $is_title ? 't' : 's' ) . $this->version_hash;

			if ( ! empty( $this->settings['typo_disable_caching'] ) || false === ( $processed_text = get_transient( $transient ) ) ) {
				$processed_text = $typo->process_feed( $text, $is_title );
				$this->set_transient( $transient, $processed_text, DAY_IN_SECONDS );
			}
		} else {
			$transient .= ( $is_title ? 't' : 's' ) . $this->version_hash;

			if ( ! empty( $this->settings['typo_disable_caching'] ) || false === ( $processed_text = get_transient( $transient ) ) ) {
				$processed_text = $typo->process( $text, $is_title );
				$this->set_transient( $transient, $processed_text, DAY_IN_SECONDS );
			}
		}

		return $processed_text;
	}

	/**
	 * Set a transient and store the key.
	 *
	 * @param string  $transient The transient key. Maximum length depends on WordPress version (for WP < 4.4 it is 45 characters)
	 * @param mixed   $value The value to store.
	 * @param number  $duration The duration in seconds. Optional. Default 1 second.
	 * @param boolean $force Set the transient even if 'Disable Caching' is set to true.
	 * @return boolean True if the transient could be set successfully.
	 */
	public function set_transient( $transient, $value, $duration = 1, $force = false ) {
		if ( ! $force && ! empty( $this->settings['typo_disable_caching'] ) ) {
			// caching is disabled and not forced for this transient, so we bail
			return false;
		}

		$result = false;
		if ( $result = set_transient( $transient, $value, $duration ) ) {
			// store $transient as keys to prevent duplicates
			$this->transients[ $transient ] = true;
			update_option( 'typo_transient_keys', $this->transients );
		}

		return $result;
	}

	/**
	 * Retrieve the PHP_Typography instance and ensure just-in-time initialization.
	 */
	private function get_php_typo() {

		if ( empty( $this->php_typo ) ) {
			$this->php_typo = new \PHP_Typography\PHP_Typography( false, 'lazy' );
			$transient = 'typo_php_' . md5( json_encode( $this->settings ) ) . '_' . $this->version_hash;

			if ( ! $this->php_typo->load_state( get_transient( $transient ) ) ) {
				// OK, we have to initialize the PHP_Typography instance manually
				$this->php_typo->init( false );

				// Load our settings into the instance
				$this->init_php_typo();

				// Try again next time
				$this->set_transient( $transient, $this->php_typo->save_state(), WEEK_IN_SECONDS, true );
			}

			// Settings won't be touched again, so cache the hash
			$this->cached_settings_hash = $this->php_typo->get_settings_hash( 11 );
		}

		return $this->php_typo;
	}

	/**
	 * Initialize the PHP_Typograpyh instance from our settings.
	 */
	private function init_php_typo() {
		// load configuration variables into our phpTypography class
		$this->php_typo->set_tags_to_ignore( $this->settings['typo_ignore_tags'] );
		$this->php_typo->set_classes_to_ignore( $this->settings['typo_ignore_classes'] );
		$this->php_typo->set_ids_to_ignore( $this->settings['typo_ignore_ids'] );

		if ( $this->settings['typo_smart_characters'] ) {
			$this->php_typo->set_smart_dashes( $this->settings['typo_smart_dashes'] );
			$this->php_typo->set_smart_dashes_style( $this->settings['typo_smart_dashes_style'] );
			$this->php_typo->set_smart_ellipses( $this->settings['typo_smart_ellipses'] );
			$this->php_typo->set_smart_math( $this->settings['typo_smart_math'] );

			// Note: smart_exponents was grouped with smart_math for the WordPress plugin,
			//       but does not have to be done that way for other ports
			$this->php_typo->set_smart_exponents( $this->settings['typo_smart_math'] );
			$this->php_typo->set_smart_fractions( $this->settings['typo_smart_fractions'] );
			$this->php_typo->set_smart_ordinal_suffix( $this->settings['typo_smart_ordinals'] );
			$this->php_typo->set_smart_marks( $this->settings['typo_smart_marks'] );
			$this->php_typo->set_smart_quotes( $this->settings['typo_smart_quotes'] );

			$this->php_typo->set_smart_diacritics( $this->settings['typo_smart_diacritics'] );
			$this->php_typo->set_diacritic_language( $this->settings['typo_diacritic_languages'] );
			$this->php_typo->set_diacritic_custom_replacements( $this->settings['typo_diacritic_custom_replacements'] );

			$this->php_typo->set_smart_quotes_primary( $this->settings['typo_smart_quotes_primary'] );
			$this->php_typo->set_smart_quotes_secondary( $this->settings['typo_smart_quotes_secondary'] );
		} else {
			$this->php_typo->set_smart_dashes( false );
			$this->php_typo->set_smart_ellipses( false );
			$this->php_typo->set_smart_math( false );
			$this->php_typo->set_smart_exponents( false );
			$this->php_typo->set_smart_fractions( false );
			$this->php_typo->set_smart_ordinal_suffix( false );
			$this->php_typo->set_smart_marks( false );
			$this->php_typo->set_smart_quotes( false );
			$this->php_typo->set_smart_diacritics( false );
		}

		$this->php_typo->set_single_character_word_spacing( $this->settings['typo_single_character_word_spacing'] );
		$this->php_typo->set_dash_spacing( $this->settings['typo_dash_spacing'] );
		$this->php_typo->set_fraction_spacing( $this->settings['typo_fraction_spacing'] );
		$this->php_typo->set_unit_spacing( $this->settings['typo_unit_spacing'] );
		$this->php_typo->set_units( $this->settings['typo_units'] );
		$this->php_typo->set_space_collapse( $this->settings['typo_space_collapse'] );
		$this->php_typo->set_dewidow( $this->settings['typo_prevent_widows'] );
		$this->php_typo->set_max_dewidow_length( $this->settings['typo_widow_min_length'] );
		$this->php_typo->set_max_dewidow_pull( $this->settings['typo_widow_max_pull'] );
		$this->php_typo->set_wrap_hard_hyphens( $this->settings['typo_wrap_hyphens'] );
		$this->php_typo->set_email_wrap( $this->settings['typo_wrap_emails'] );
		$this->php_typo->set_url_wrap( $this->settings['typo_wrap_urls'] );
		$this->php_typo->set_min_after_url_wrap( $this->settings['typo_wrap_min_after'] );
		$this->php_typo->set_style_ampersands( $this->settings['typo_style_amps'] );
		$this->php_typo->set_style_caps( $this->settings['typo_style_caps'] );
		$this->php_typo->set_style_numbers( $this->settings['typo_style_numbers'] );
		$this->php_typo->set_style_initial_quotes( $this->settings['typo_style_initial_quotes'] );
		$this->php_typo->set_initial_quote_tags( $this->settings['typo_initial_quote_tags'] );

		if ( $this->settings['typo_enable_hyphenation'] ) {
			$this->php_typo->set_hyphenation( $this->settings['typo_enable_hyphenation'] );
			$this->php_typo->set_hyphenate_headings( $this->settings['typo_hyphenate_headings'] );
			$this->php_typo->set_hyphenate_all_caps( $this->settings['typo_hyphenate_caps'] );
			$this->php_typo->set_hyphenate_title_case( $this->settings['typo_hyphenate_title_case'] );
			$this->php_typo->set_hyphenation_language( $this->settings['typo_hyphenate_languages'] );
			$this->php_typo->set_min_length_hyphenation( $this->settings['typo_hyphenate_min_length'] );
			$this->php_typo->set_min_before_hyphenation( $this->settings['typo_hyphenate_min_before'] );
			$this->php_typo->set_min_after_hyphenation( $this->settings['typo_hyphenate_min_after'] );
			$this->php_typo->set_hyphenation_exceptions( $this->settings['typo_hyphenate_exceptions'] );
		} else { // save some cycles
			$this->php_typo->set_hyphenation( $this->settings['typo_enable_hyphenation'] );
		}
	}

	/**
	 * Initialize options with default values.
	 *
	 * @param boolean $force_defaults Optional. Default false.
	 */
	function set_default_options( $force_defaults = false ) {
		// grab configuration variables
		foreach ( $this->default_settings as $key => $value ) {
			// set or update the options with the default value if necessary.
			if ( $force_defaults || ! is_string( get_option( $key ) ) ) {
				update_option( $key, $value['default'] );
			}
		}

		if ( $force_defaults ) {
			// reset switch
			update_option( 'typo_restore_defaults', false );
			update_option( 'typo_clear_cache', false );
		}
	}

	/**
	 * Retrieve the plugin's default option values.
	 *
	 * @return array
	 */
	public function get_default_options() {
		return $this->default_settings;
	}

	/**
	 * Clear all transients set by the plugin.
	 */
	 function clear_cache() {
		// delete all our transients
		foreach( array_keys( $this->transients ) as $transient ) {
			delete_transient( $transient );
		}

		$this->transients = array();
		update_option( 'typo_transient_keys', $this->transients );
		update_option( 'typo_clear_cache', false );
	}

	/**
	 * Print CSS and JS depending on plugin options.
	 */
	function add_wp_head() {
		if ( $this->settings['typo_style_css_include'] && trim( $this->settings['typo_style_css'] ) != '' ) {
			echo '<style type="text/css">'."\r\n";
			echo $this->settings['typo_style_css']."\r\n";
			echo "</style>\r\n";
		}

		if ( $this->settings['typo_remove_ie6'] ) {
			echo "<!--[if lt IE 7]>\r\n";
			echo "<script type='text/javascript'>";
			echo "function stripZWS() { document.body.innerHTML = document.body.innerHTML.replace(/\u200b/gi,''); }";
			echo "window.onload = stripZWS;";
			echo "</script>\r\n";
			echo "<![endif]-->\r\n";
		}

		if ( $this->settings['typo_hyphenate_safari_font_workaround'] ) {
			echo "<style type=\"text/css\">body {-webkit-font-feature-settings: \"liga\", \"dlig\";}</style>\r\n";
		}
	}

	/**
	 * Load translations and check for other plugins.
	 */
	function plugins_loaded() {
		// Load our translations
		load_plugin_textdomain( 'wp-typography', false, dirname( $this->local_plugin_path ) . '/translations/' );

		// Check for NextGEN Gallery and use insane filter priority if activated
		if ( class_exists( 'C_NextGEN_Bootstrap' ) ) {
			$this->filter_priority = PHP_INT_MAX;
		}
	}

	/**
	 * Encodes the given version string (in the form "3.0.0-beta.1") to a representation suitable for hashing.
	 *
	 * The current implementation works as follows:
	 * 1. The version is broken into tokens at each ".".
	 * 2. Each token is stripped of all characters except numbers.
	 * 3. Each number is added to decimal 64 to arrive at an ASCII code.
	 * 4. The character representation of that ASCII code is added to the result.
	 *
	 * This means that textual qualifiers like "alpha" and "beta" are ignored, so "3.0.0-alpha.1" and
	 * "3.0.0-beta.1" result in the same hash. Since those are not regular release names, this is deemed
	 * acceptable to make the algorithm simpler.
	 *
	 * @param unknown $version
	 * @return string The hashed version (containing as few bytes as possible);
	 */
	private function hash_version_string( $version ) {
		$hash = '';

		$parts = explode( '.', $version );
		foreach( $parts as $part ) {
			$hash .= chr( 64 + preg_replace('/[^0-9]/', '', $part ) );
		}

		return $hash;
	}

	/**
	 * Retrieve the plugin version.
	 *
	 * @return string
	 */
	public function get_version() {
		return $this->version;
	}

	/**
	 * Retrieve the plugin version hash.
	 *
	 * @return string
	 */
	public function get_version_hash() {
		return $this->version_hash;
	}
}
