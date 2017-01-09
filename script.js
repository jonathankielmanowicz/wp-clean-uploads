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

    $.ajax({
      url: ajaxurl,
      type: 'POST',
      dataType: 'json',
      data: {
        action: 'delete_files',
        security: wpCleanUploads.security,
        files: filesToDelete
      },
      success: function(res) {
        location.reload();
        console.log(wpCleanUploads.success);
      },
      error: function(res) {
        console.log(wpCleanUploads.error);
      }
    });

  });

  deleteAll.click(function(){
    $.ajax({
      url: ajaxurl,
      type: 'POST',
      dataType: 'json',
      data: {
        action: 'delete_all',
        security: wpCleanUploads.security
      },
      success: function(res) {
        location.reload();
        console.log(wpCleanUploads.success);
      },
      error: function(res) {
        console.log(wpCleanUploads.error);
      }
    });
  });

});