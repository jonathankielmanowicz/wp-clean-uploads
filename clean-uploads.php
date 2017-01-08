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

  $args = array( 'public' => true, 'label' => 'Clean Media' );

  register_post_type( 'clean_media', $args);
}

add_action( 'init', 'cu_register_clean_media' );