<?php

// Custom post types

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
	register_post_type( 'concerts', 
		array(
			'labels' => array(
				'name' => __( 'Concerts' ),
				'singular_name' => __( 'Concert' ),
				'add_new' => __( 'Add new' ),
				'add_new_item' => __( 'Add new concert' ),
				'edit' => __( 'Edit' ),
				'edit_item' => __( 'Edit concert' ),
				'new_item' => __( 'New concert' ),
				'view' => __( 'View concert' ),
				'view_item' => __( 'View concert' ),
				'search_items' => __( 'Search concerts' ),
				'not_found' => __( 'No concerts found' ),
				'not_found_in_trash' => __( 'No concerts found in trash' )
			),
			'public' => true,
		)
	);
}