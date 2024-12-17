<?php
/*
Plugin Name: Codemic RealtySync - Register Post Type
Plugin URI:  https://codemic.fi/
Description: Registers a 'Realty' custom post type to be used with Codemic RealtySync.
Version:     1.0.0
Author:      Mikko Heikkilä <mikko.heikkila@codemic.fi>
Author URI:  https://codemic.fi/
License:     GPL2
Text Domain: codemic-realtysync
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function create_realty_post_type() {
    $labels = array(
        'name'                  => _x( 'Realties', 'Post Type General Name', 'realty-post-type' ),
        'singular_name'         => _x( 'Realty', 'Post Type Singular Name', 'realty-post-type' ),
        'menu_name'             => __( 'Realties', 'realty-post-type' ),
        'name_admin_bar'        => __( 'Realty', 'realty-post-type' ),
        'add_new'               => __( 'Add New', 'realty-post-type' ),
        'add_new_item'          => __( 'Add New Realty', 'realty-post-type' ),
        'new_item'              => __( 'New Realty', 'realty-post-type' ),
        'edit_item'             => __( 'Edit Realty', 'realty-post-type' ),
        'view_item'             => __( 'View Realty', 'realty-post-type' ),
        'all_items'             => __( 'All Realties', 'realty-post-type' ),
        'search_items'          => __( 'Search Realties', 'realty-post-type' ),
        'parent_item_colon'     => __( 'Parent Realty:', 'realty-post-type' ),
        'not_found'             => __( 'No Realties found.', 'realty-post-type' ),
        'not_found_in_trash'    => __( 'No Realties found in Trash.', 'realty-post-type' ),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __( 'A custom post type for real estate listings.', 'realty-post-type' ),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'capability_type'       => 'post',
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-building',
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'has_archive'           => true,
        'rewrite'               => array( 'slug' => 'realty' ),
    );

    register_post_type( 'realty', $args );
}
add_action( 'init', 'create_realty_post_type' );
