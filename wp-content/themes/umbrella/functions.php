<?php
/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'umbrella' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'umbrella' ),
		'menu_name'           => __( 'Services', 'umbrella' ),
		'parent_item_colon'   => __( 'Parent Service', 'umbrella' ),
		'all_items'           => __( 'All Services', 'umbrella' ),
		'view_item'           => __( 'View Service', 'umbrella' ),
		'add_new_item'        => __( 'Add New Service', 'umbrella' ),
		'add_new'             => __( 'Add New', 'umbrella' ),
		'edit_item'           => __( 'Edit Service', 'umbrella' ),
		'update_item'         => __( 'Update Service', 'umbrella' ),
		'search_items'        => __( 'Search Service', 'umbrella' ),
		'not_found'           => __( 'Not Found', 'umbrella' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'umbrella' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'Services', 'umbrella' ),
		'description'         => __( 'Service news and reviews', 'umbrella' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		// 'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Registering your Custom Post Type
	register_post_type( 'Services', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );
