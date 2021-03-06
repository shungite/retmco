<?php

/**
 *  This file is part of wp-Typography.
 *
 *	Copyright 2015 Peter Putzer.
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
 *  @package wpTypography/PHPTypography
 *  @author Peter Putzer <github@mundschenk.at>
 *  @license http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * An autoloader implementation for the PHP_Typography classes.
 *
 * @param string $class_name
 */
function php_typography_autoloader( $class_name ) {
	static $prefix;
	if ( empty( $prefix ) ) {
		$prefix = 'PHP_Typography\\';
	}

	if ( false === strpos( $class_name, $prefix ) ) {
		return; // abort
	}

	static $classes_dir;
	if ( empty( $classes_dir ) ) {
		$classes_dir = realpath( dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR;
	}

	$class_name_parts = explode( '\\', $class_name );
	$class_file = 'class-' . str_replace( '_', '-', strtolower( array_pop( $class_name_parts ) ) ) . '.php';
	if ( is_file( $class_file_path = $classes_dir . $class_file ) ) {
		require_once( $class_file_path );
	}
}
spl_autoload_register( 'php_typography_autoloader' );
