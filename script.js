jQuery(document).ready(function($) {

  var deleteSelected = $('#delete-selected ');
  var deleteAll = $('#delete-all');

  var files = document.getElementsByClassName('to-delete-file-name');

  deleteSelected.click(function(){

    var filesToDelete = [];

    for(var i=0; i<files.length; i++) {
      if(files[i].checked == true) {
        filesToDelete.push(files[i].nextSibling.nodeValue);
      }
    }

    executeDeletion(filesToDelete);

  });

  deleteAll.click(function(){

    var filesToDelete = [];

    for(var i=0; i<files.length; i++) {
      filesToDelete.push(files[i].nextSibling.nodeValue);
    }

    executeDeletion(filesToDelete);

  });

  function executeDeletion(files) {
        $.ajax({
      url: ajaxurl,
      type: 'POST',
      dataType: 'json',
      data: {
        action: 'delete_files',
        security: wpCleanUploads.security,
        files: files
      },
      success: function(res) {
        location.reload();
        console.log(wpCleanUploads.success);
      },
      error: function(res) {
        console.log(wpCleanUploads.error);
      }
    });
  }

});