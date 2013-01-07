<?php

// Custom functions

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
	register_post_type( 'concert',
		array(
			'labels' => array(
				'name' => __( 'Concerts' ),
				'singular_name' => __( 'Concert' )
			),
			'public' => true,
		)
	);
}

