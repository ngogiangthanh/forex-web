$(document).ready(function()
{
    $('#search').keyup(function(e) {
        if (e.which === 13) {
            var searchtxt = $("#search").val();
            var url = $("#urlsearch").val();
            var type = $("#type_id option:selected").val();
            searchtxt = fulltrim(searchtxt);
            url = url + "=" + searchtxt + "/" + type;
            if (searchtxt === null || searchtxt === "")
            {
                toastr.error("Vui lòng nhập chuỗi cần tìm kiếm!");
            }
            else
            {
                location.href = url;
            }
        }
    });
    $('#btnsearch').click(function() {
        var searchtxt = $("#search").val();
        var url = $("#urlsearch").val();
        var type = $("#type_id option:selected").val();
        searchtxt = fulltrim(searchtxt);
        url = url + "=" + searchtxt + "/" + type;
        if (searchtxt === null || searchtxt === "")
        {
            toastr.error("Vui lòng nhập chuỗi cần tìm kiếm!");
        }
        else
        {
            location.href = url;
        }
    });
    $("#type_id").change(function() {
        var url = $("#urlchosen").val();
        var type = $("#type_id option:selected").val();
        location.href = url + "/" + type;
    });

    $('#searchLH').keyup(function(e) {
        if (e.which === 13) {
            var searchtxt = $("#searchLH").val();
            var url = $("#urlsearchLH").val();
            searchtxt = fulltrim(searchtxt);
            if (searchtxt === null || searchtxt === "")
            {
                toastr.error("Vui lòng nhập chuỗi cần tìm kiếm!");
            }
            else
            {
                location.href = url + "=" + searchtxt;
            }
        }
    });
    $('#btnsearchLH').click(function() {
        var searchtxt = $("#searchLH").val();
        var url = $("#urlsearchLH").val();
        searchtxt = fulltrim(searchtxt);
        if (searchtxt === null || searchtxt === "")
        {
            toastr.error("Vui lòng nhập chuỗi cần tìm kiếm!");
        }
        else
        {
            location.href = url + "=" + searchtxt;
        }
    });
});