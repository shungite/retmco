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
		'taxonomies' => array('category', 'post_tag'),
		'supports' => array( 
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'comments'
		),
		'has_archive' => true,
		);
	register_post_type( 'concert', $args );
}

function create_event_post_types() {
	$labels = array(
		'name' => _x( 'Events', 'post type general name' ),
		'singular_name' => _x( 'Event', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'event' ),
		'add_new_item' => __( 'Add New Event' ),
		'edit_item' => __( 'Edit Event' ),
		'new_item' => __( 'New Event' ),
		'all_items' => __( 'All Events' ),
		'view_item' => __( 'View Events' ),
		'search_items' => __( 'Search Events' ),
		'not_found' => __( 'No events found' ),
		'not_found_in_trash' => __( 'No events found in Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Events'
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Holds Manitoba Chamber Orchestra Events' ),
		'public' => true,
		'menu_position' => 20,
		'taxonomies' => array('category', 'post_tag'),
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'comments'
		),
		'has_archive' => true,
		);
	register_post_type( 'event', $args );
}

add_action( 'init', 'create_concert_post_types' );
add_action( 'init', 'create_event_post_types' );
