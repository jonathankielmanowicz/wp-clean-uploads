<?php

/*
* $dirPath - path to the uploads folder
* $deleteArray - array of file names to delete
*/
function cu_clean_media_execute_all($dirPath,$deleteArray) {

  for($i=0; $i<sizeof($deleteArray); $i++) {

    $file = $dirPath . '/' . $deleteArray[$i];

    wp_delete_file($file);

  }
}

function cu_delete_files() {

  if ( !check_ajax_referer( 'wp-delete-files', 'security') ) {
    return wp_send_json_error( 'Invalid Nonce' );
  }

  if ( !current_user_can('manage_options') ) {
    return wp_send_json_error('You are not allowed to do this.');
  }

  $filesToDelete = $_POST['files'];

  cu_clean_media_execute_all( wp_upload_dir()['basedir'], $filesToDelete );

}

add_action( 'wp_ajax_delete_files', 'cu_delete_files' );


?>