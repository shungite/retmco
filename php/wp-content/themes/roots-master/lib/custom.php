<?php

// Custom functions

function create_concert_post_types() {
	$labels = array(
		'name' => _x( 'Concerts', 'post type general name' ),
		'singular_name' => _x( 'Concert', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'concert' ),
		'add_new_item' => __( 'Add New Concert' ),
		'edit_item' => __( 'Edit Concert' ),
		'new_item' => __( 'New Concert' ),
		'all_items' => __( 'All Concerts' ),
		'view_item' => __( 'View Concert' ),
		'search_items' => __( 'Search Concerts' ),
		'not_found' => __( 'No concerts found' ),
		'not_found_in_trash' => __( 'No concerts found in Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Concerts'
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Holds Manitoba Chamber Orchestra Concerts' ),
		'public' => true,
		'menu_position' => 20,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive' => true,
		);
	register_post_type( 'concert', $args );
}

add_action( 'init', 'create_concert_post_types' );
?>