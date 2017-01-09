<?php
  $mediaFiles = []; //files in Media section of WordPress
  $uploadsFiles = []; //files in Uploads directory

  //fill $mediaFiles with the files in the Media section of WordPress
  global $wpdb;

  $query = "SELECT meta_value FROM $wpdb->postmeta WHERE $wpdb->postmeta.meta_key = '_wp_attached_file'";
  $results = $wpdb->get_results( $query, ARRAY_N );

  for( $i=0 ; $i<sizeof($results); $i++) {
    array_push($mediaFiles, $results[$i][0]);
  }

  //fill $uploadFiles with the files in the Uploads directory
  $basedir = wp_upload_dir()['basedir'];

  foreach (glob($basedir."/*") as $filename) {
      $TMP = explode('/',$filename);
      $SKETCHNAME = $TMP[sizeof($TMP)-1];
      array_push($uploadsFiles,$SKETCHNAME);
  }

  $toDelete = [];

  //cycle through the files in the Uploads directory
  for( $i=0 ; $i<sizeof($uploadsFiles); $i++) {

    //get the name of the file
    $uploadsFileName = $uploadsFiles[$i];

    //if the file is not in the WordPress database (Media Library), delete it
    if(!in_array($uploadsFileName, $mediaFiles)) {
      array_push($toDelete, $uploadsFileName);
    }
  }
?>