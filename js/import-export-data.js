
function downloadFile(filePath) {        
    /*
    $.fileDownload(filePath, {
        successCallback: function(url) {
            //$preparingFileModal.dialog('close');
        },
        failCallback: function(responseHtml, url) {
            //$preparingFileModal.dialog('close');
            //$("#error-modal").dialog({modal: true});
        }
    });
    return false;
    */
    var appName = window.location.pathname.split('/')[1];                          
    window.location.href = 'http://' + document.domain + '/' +appName +'/'+ filePath;
}

function createFile(option) {
    $('#loader').modal('show');
    $.ajax({
        url: 'export/download',
        data: {option: option},
        type: 'POST',
        error: function(data, textStatus) {
            alert(data.responseText);
        },
        success: function(data, textStatus) { 
            downloadFile(data);
            $('#loader').modal('hide');
        }
    }).done(function() {
    });
}
