<?php

function cu_clean_media_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    require plugin_dir_path(__FILE__) . 'cu-menu-display.php';
}

function cu_clean_media() {

  add_menu_page( 'Clean Media', 'Clean Media', 'manage_options', 'clean-media', 'cu_clean_media_html', 'dashicons-trash', 10 );

}

add_action( 'admin_menu', 'cu_clean_media' );

?>
