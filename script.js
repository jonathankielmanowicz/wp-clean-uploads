jQuery(document).ready(function($) {

  var deleteSelected = $('#delete-selected ');
  var deleteAll = $('#delete-all');

  deleteSelected.click(function(){

    var files = document.getElementsByClassName('to-delete-file-name');
    var filesToDelete = [];

    for(var i=0; i<files.length; i++) {
      if(files[i].checked == true) {
        filesToDelete.push(files[i].nextSibling.nodeValue);
      }
    }

    console.log(filesToDelete);

    $.ajax({
      url: ajaxurl,
      type: 'POST',
      dataType: 'json',
      data: {
        action: 'delete_selected',
        security: wpCleanUploads.security,
        files: ''
      },
      success: function(res) {
        // location.reload();
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
        // location.reload();
        console.log(wpCleanUploads.success);
      },
      error: function(res) {
        console.log(wpCleanUploads.error);
      }
    });
  });

});