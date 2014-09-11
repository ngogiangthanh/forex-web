$(document).ready(function()
{
    $(".xulylh").change(function(e) {
        var id = $(this).attr("value");
        var url = $("#urlsearchCheckXL").val();
        $.ajax(
                {
                    url: url + '=' + id,
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            if (data.html === "")
            {
                toastr.error("Cập nhật trạng thái không thành công!");
            }
            else {
                toastr.success("Cập nhật trạng thái thành công!");
                var d = new Date();
                $("#time_" + id).hide().fadeIn("slow").html(data.html);
            }
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
});