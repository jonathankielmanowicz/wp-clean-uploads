<?php
/*
* Plugin Name: Clean Uploads
* Description: Cleans out images from uploads folder that are not in your media library.
* Author: Jonathan Kielmanowicz
* Author URI: http://github.com/jonathankielmanowicz
* Version: 0.0.1
*/

//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

function cu_register_clean_images() {

  $args = array( 'public' => true, 'label' => 'Clean Images' );

  register_post_type( 'clean_images', $args);
}

add_action( 'init', 'cu_register_clean_images' );