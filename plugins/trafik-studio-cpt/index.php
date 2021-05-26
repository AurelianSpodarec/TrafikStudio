<?php
/**
* Plugin Name: Trafik Studio: Custom Post Types
* Plugin URI: trafikstudio.com
* Description: Custom Post Types for the website
* Version: 0.1.0
* Author: Aurelian Spodarec
* Author URI: aurelianspodarec.co.uk
*
* @package Sage
*/


// Generated via: https://generatewp.com/post-type/
// ==========================================================================
// CustomPostTypes
// ==========================================================================
//
//
//  - Work
//  - Services
//
//


// function wporg_register_taxonomy_services_category() {
// 	$labels = array(
// 		'name'              => _x( 'Services', 'taxonomy general name' ),
// 		'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
// 		'search_items'      => __( 'Search Services' ),
// 		'all_items'         => __( 'All Services' ),
// 		'parent_item'       => __( 'Parent Course' ),
// 		'parent_item_colon' => __( 'Parent Course:' ),
// 		'edit_item'         => __( 'Edit Course' ),
// 		'update_item'       => __( 'Update Course' ),
// 		'add_new_item'      => __( 'Add New Course' ),
// 		'new_item_name'     => __( 'New Course Name' ),
// 		'menu_name'         => __( 'Course' ),
// 	);
// 	$args   = array(
// 		'hierarchical'      => true, // make it hierarchical (like categories)
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'show_in_rest' => true,
// 		'rewrite'           => [ 'slug' => 'services' ],
// 	);
// 	register_taxonomy( 'service_category', array('services'), $args );
// }
// add_action( 'init', 'wporg_register_taxonomy_services_category' );
// ==========================================================================
// CustomPostTypes: Work
// ==========================================================================
    
function create_work_cpt() {

	$labels = array(
		'name' => _x( 'Work', 'Post Type General Name', 'sage' ),
		'singular_name' => _x( 'Work', 'Post Type Singular Name', 'sage' ),
		'menu_name' => _x( 'Work', 'Admin Menu text', 'sage' ),
		'name_admin_bar' => _x( 'Work', 'Add New on Toolbar', 'sage' ),
		'archives' => __( 'Work Archives', 'sage' ),
		'attributes' => __( 'Work Attributes', 'sage' ),
		'parent_item_colon' => __( 'Parent Work:', 'sage' ),
		'all_items' => __( 'All Work', 'sage' ),
		'add_new_item' => __( 'Add New Work', 'sage' ),
		'add_new' => __( 'Add New', 'sage' ),
		'new_item' => __( 'New Work', 'sage' ),
		'edit_item' => __( 'Edit Work', 'sage' ),
		'update_item' => __( 'Update Work', 'sage' ),
		'view_item' => __( 'View Work', 'sage' ),
		'view_items' => __( 'View Work', 'sage' ),
		'search_items' => __( 'Search Work', 'sage' ),
		'not_found' => __( 'Not found', 'sage' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'sage' ),
		'featured_image' => __( 'Featured Image', 'sage' ),
		'set_featured_image' => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image' => __( 'Use as featured image', 'sage' ),
		'insert_into_item' => __( 'Insert into Work', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Work', 'sage' ),
		'items_list' => __( 'Work list', 'sage' ),
		'items_list_navigation' => __( 'Work list navigation', 'sage' ),
		'filter_items_list' => __( 'Filter Work list', 'sage' ),
	);
	$args = array(
		'label' => __( 'Work', 'sage' ),
		'description' => __( '', 'sage' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-open-folder',
		'supports' => array(),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'work', $args );

}
add_action( 'init', 'create_work_cpt', 0 );



// ==========================================================================
// CustomPostTypes: Services
// ==========================================================================

function create_service_cpt() {

	$labels = array(
		'name'              => _x( 'Services', 'taxonomy general name' ),
		'singular_name'     => _x( 'Service Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Services' ),
		'all_items'         => __( 'All Services' ),
		'parent_item'       => __( 'Parent Service Category' ),
		'parent_item_colon' => __( 'Parent Service Category:' ),
		'edit_item'         => __( 'Edit Service Category' ),
		'update_item'       => __( 'Update Service Category' ),
		'add_new_item'      => __( 'Add New Service Category' ),
		'new_item_name'     => __( 'New Service Category Name' ),
		'menu_name'         => __( 'Service Category' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest' 		=> true,
		'rewrite'           => [ 'slug' => 'services' ],
	);
	register_taxonomy( 'service_category', ['services'], $args );
	

	unset($labels);
	unset($args);

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'sage' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'sage' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'sage' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'sage' ),
		'archives' => __( 'Service Archives', 'sage' ),
		'attributes' => __( 'Service Attributes', 'sage' ),
		'parent_item_colon' => __( 'Parent Service:', 'sage' ),
		'all_items' => __( 'All Services', 'sage' ),
		'add_new_item' => __( 'Add New Service', 'sage' ),
		'add_new' => __( 'Add New', 'sage' ),
		'new_item' => __( 'New Service', 'sage' ),
		'edit_item' => __( 'Edit Service', 'sage' ),
		'update_item' => __( 'Update Service', 'sage' ),
		'view_item' => __( 'View Service', 'sage' ),
		'view_items' => __( 'View Services', 'sage' ),
		'search_items' => __( 'Search Service', 'sage' ),
		'not_found' => __( 'Not found', 'sage' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'sage' ),
		'featured_image' => __( 'Featured Image', 'sage' ),
		'set_featured_image' => __( 'Set featured image', 'sage' ),
		'remove_featured_image' => __( 'Remove featured image', 'sage' ),
		'use_featured_image' => __( 'Use as featured image', 'sage' ),
		'insert_into_item' => __( 'Insert into Service', 'sage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'sage' ),
		'items_list' => __( 'Services list', 'sage' ),
		'items_list_navigation' => __( 'Services list navigation', 'sage' ),
		'filter_items_list' => __( 'Filter Services list', 'sage' ),
	);

	$args = array(
		'label' => $labels,
		'description' => __( '', 'sage' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-text-page',
		'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'post-formats', 'custom-fields' ),
		// 'taxonomies' => array( 'services_category' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'rewrite' => array( 'slug' => 'services/%service_category%'),
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'create_service_cpt', 0 );

function wpa_service_category_post_link( $post_link, $id = 0 ){
    $post = get_post($id);  
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'service_category' );
        if( $terms ){
            return str_replace( '%service_category%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;  
}
add_filter( 'post_type_link', 'wpa_service_category_post_link', 1, 3 );



