$(document).ready(function()
{
    $('#search').keyup(function(e) {
        if (e.which === 13) {
            var searchtxt = $("#search").val();
            var url = $("#urlsearch").val();
            search(searchtxt, url);
        }
    });

    $('#btnsearch').click(function() {
        var searchtxt = $("#search").val();
        var url = $("#urlsearch").val();
        search(searchtxt, url);
    });

    function search(string, url)
    {
        string = fulltrim(string);
        if (string === null || string === "")
        {
            toastr.error("Vui lòng nhập chuỗi cần tìm kiếm!");
        }
        else
        {
            location.href = url + "=" + string;
        }
    }
});