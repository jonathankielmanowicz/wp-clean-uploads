<?php
/*
* Plugin Name: Clean Uploads
* Description: Cleans out files from uploads directory that are not in your media library.
* Author: Jonathan Kielmanowicz
* Author URI: http://github.com/jonathankielmanowicz
* Version: 1.0.0
*/

if ( !defined('ABSPATH' ) ) {
  exit;
}

require_once (plugin_dir_path(__FILE__) . 'cu-render-admin.php');
require_once (plugin_dir_path(__FILE__) . 'cu-menu-delete-files.php');

function cu_admin_enqueue_scripts() {

  wp_enqueue_style( 'cu-admin-css', plugins_url( './style.css', __FILE__ ) );
  wp_enqueue_script( 'cu-admin-js', plugins_url( './script.js', __FILE__ ) );
  wp_localize_script( 'cu-admin-js', 'wpCleanUploads', array(
      'security' => wp_create_nonce( 'wp-delete-files' ),
      'success' => 'Successfully deleted files!',
      'error' => 'There was an error deleting your files.'
    ) );

}
add_action( 'admin_enqueue_scripts', 'cu_admin_enqueue_scripts' );