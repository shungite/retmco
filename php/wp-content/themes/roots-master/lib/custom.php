<?php

// Custom functions

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
	register_post_type( 'concert',
		array(
			'labels' => array(
				'name' => __( 'Concerts' ),
				'description' => __( 'Manitoba Chamber Orchestra Concert' ),
				'singular_name' => __( 'Concert' ),
				'add_new' => __( 'Add New' ),
				'add_new_item' => __( 'Add New Concert' ),
				'edit' => __( 'Edit' ),
				'edit_item' => __( 'Edit Concert' ),
				'new_item' => __( 'New Concert' ),
				'view' => __( 'View Concert' ),
				'view_item' => __( 'View Concert' ),
				'search_items' => __( 'Search Concerts' ),
				'not_found' => __( 'No concerts found' ),
				'not_found_in_trash' => __( 'No concerts found in Trash' ),
				'parent' => __( 'Parent Concert' ),
			),
			'public' => true,
			'show_ui' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'hierarchical' => true,
			'query_var' => true,
			'menu_position' => 20
		)
	);
}

