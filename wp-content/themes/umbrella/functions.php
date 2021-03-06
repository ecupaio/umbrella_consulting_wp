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
		'description'         => __( 'Services offered', 'umbrella' ),
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
	register_post_type(
		'Clients', array(
			'labels' => array('name' => __( 'Clients' ), 'singular_name' => __( 'Client' ) ),
		      'public' => true,
		      'has_archive' => true,
		      'supports' => array('title', 'editor', 'thumbnail')
		)
	);


}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );
function wptuts_scripts_basic()
{

    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/theme_functions.min.js', '','',false );

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );
/* Register Menus*/
function register_my_menus() {
register_nav_menus(
array( 'header-menu' => __( 'Header Menu' ), 'footer-menu' => __( 'Footer Menu' ))
);
}
add_action( 'init', 'register_my_menus' );
add_theme_support( 'custom-logo', array(
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
function get_logo_url() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	echo $image[0];
}
function meta_img() {
	$icon = get_site_icon_url();
	echo $icon;
}

function clean_custom_menus() {
	$menu_name = 'footer-menu'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
	   $menu = wp_get_nav_menu_object($locations[$menu_name]);
	   $menu_items = wp_get_nav_menu_items($menu->term_id);

	   $menu_list = '<div class="social-links">' ."\n";

	   foreach ((array) $menu_items as $key => $menu_item) {
		   $title = $menu_item->title;
		   $url = $menu_item->url;
		   $menu_list .= "\t\t\t\t". '<a class="social-link" target="_blank" href="'. $url .'"></a>' ."\n";
	   }

	   $menu_list .= "\t\t\t". '</div>' ."\n";
	} else {
	   // $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}
//upload svg
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
