<?php
/*
* Plugin Name: Clean Uploads
* Description: Cleans out images from uploads directory that are not in your media library.
* Author: Jonathan Kielmanowicz
* Author URI: http://github.com/jonathankielmanowicz
* Version: 0.0.1
*/

function cu_clean_media_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    require plugin_dir_path(__FILE__) . 'cu-menu.php';
}

function cu_clean_media() {

  add_menu_page( 'Clean Media', 'Clean Media', 'manage_options', 'clean-media', 'cu_clean_media_html', 'dashicons-trash', 10 );

}

add_action( 'admin_menu', 'cu_clean_media' );
