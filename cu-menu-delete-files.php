<?php

function cu_clean_media_execute_all($dirPath,$deleteArray) {

  for($i=0; $i<sizeof($deleteArray); $i++) {

    $file = $dirPath . '/' . $deleteArray[$i];

    echo $file;

//     // wp_delete_file($file);

  }
}

function cu_delete_selected() {

  if ( !check_ajax_referer( 'wp-delete-files', 'security') ) {
    return wp_send_json_error( 'Invalid Nonce' );
  }

  if ( !current_user_can('manage_options') ) {
    return wp_send_json_error('You are not allowed to do this.');
  }



}

add_action( 'wp_ajax_delete_selected', 'cu_delete_selected' );

?>