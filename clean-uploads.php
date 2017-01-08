<?php
/*
* Plugin Name: Clean Uploads
* Description: Cleans out images from uploads directory that are not in your media library.
* Author: Jonathan Kielmanowicz
* Author URI: http://github.com/jonathankielmanowicz
* Version: 0.0.1
*/

//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

function cu_register_clean_media() {

  if( current_user_can('manage_options') ) {

    $args = array(
      'public'              => true,
      'label'               => 'Clean Media',
      'publicly_queryable'  => true,
      'exclude_from_search' => true,
      'show_in_nav_menus'   => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_admin_bar'   => false,
      'menu_position'       => 10,
      'menu_icon'           => 'dashicons-trash',
      'can_export'          => true,
      'delete_with_user'    => false,
      'hierarchical'        => false,
      'has_archive'         => true,
      'query_var'           => true,
      'capability_type'     => 'post',
      'map_meta_cap'        => true,
      // 'capabilities' => array(),
      'rewrite'             => array(
        'slug' => $slug,
        'with_front' => true,
        'pages' => true,
        'feeds' => true,
        ),
      'supports'            => array(
        'title',
        'editor',
        'author',
        'custom-fields'
        )
      );

    register_post_type( 'clean_media', $args);

  }

}

add_action( 'init', 'cu_register_clean_media' );