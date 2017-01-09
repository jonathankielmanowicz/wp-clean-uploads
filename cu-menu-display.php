<?php

  require_once (plugin_dir_path(__FILE__) . 'cu-load-files.php');

?>
<div class="cu-wrapper">
  <h1 class="title">Clean Media</h1>
  <?php
    if(sizeof($toDelete) == 0 ) {
      echo '<p class="files-to-delete">0 files to delete!</p>';
    } else if (sizeof($toDelete) == 1 ) {
      echo '<p class="files-to-delete">' . sizeof($toDelete) . ' file to delete:</p>';
    } else {
      echo '<p class="files-to-delete">' . sizeof($toDelete) . ' files to delete:</p>';
    }
  ?>
  <form name="to-delete-form">
    <div class="to-delete-files-container">
        <ul>
          <?php
          for($i=0; $i<sizeof($toDelete); $i++) {
            echo '<li><input class="to-delete-file-name" type="checkbox">'.$toDelete[$i].'</li>';
          }
          ?>
        </ul>
    </div>
    <p id="delete-selected" class="confirm-delete-btn">DELETE SELECTED</p>
    <p id="delete-all" class="confirm-delete-btn">DELETE ALL</p>
  </form>
</div>