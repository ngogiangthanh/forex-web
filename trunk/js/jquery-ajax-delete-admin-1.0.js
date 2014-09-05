$(document).ready(function()
{
    $(".delete_ll").click(function(e) {
        var id = $(this).attr("id");
        var url = $(this).attr("href");
        if (confirm("Bạn có chắc xóa liên lạc " + id + " này không?"))
        {
            $.ajax(
                    {
                        url: url + '/' + id,
                        type: "get",
                        datatype: "html"
                    }).done(function(data) {
                console.log(data.html);
                if (data.html === false)
                {
                    toastr.error("Xóa liên lạc " + id + " không thành công!");
                }
                else {
                    toastr.success("Xóa liên lạc " + id + " thành công!");
                    $("#row_" + id).hide().fadeOut("slow");
                }
            }).fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('No response from server!');
            });
            return false;
        }
        else
            return false;

    });
    
    $(".delete_lh").click(function(e) {
        var id = $(this).attr("id");
        var url = $(this).attr("href");
        if (confirm("Bạn có chắc xóa liên hệ " + id + " này không?"))
        {
            $.ajax(
                    {
                        url: url + '/' + id,
                        type: "get",
                        datatype: "html"
                    }).done(function(data) {
                console.log(data.html);
                if (data.html === false)
                {
                    toastr.error("Xóa liên hệ " + id + " không thành công!");
                }
                else {
                    toastr.success("Xóa liên hệ " + id + " thành công!");
                    $("#row_" + id).hide().fadeOut("slow");
                }
            }).fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('No response from server!');
            });
            return false;
        }
        else
            return false;

    });
    
    $(".delete_bv").click(function(e) {
        var id = $(this).attr("id");
        var url = $(this).attr("href");
        if (confirm("Bạn có chắc xóa bài viết " + id + " này không?"))
        {
            $.ajax(
                    {
                        url: url + '/' + id,
                        type: "get",
                        datatype: "html"
                    }).done(function(data) {
                console.log(data.html);
                if (data.html === false)
                {
                    toastr.error("Xóa bài viết " + id + " không thành công!");
                }
                else {
                    toastr.success("Xóa bài viết " + id + " thành công!");
                    $("#row_" + id).hide().fadeOut("slow");
                }
            }).fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('No response from server!');
            });
            return false;
        }
        else
            return false;

    });
});