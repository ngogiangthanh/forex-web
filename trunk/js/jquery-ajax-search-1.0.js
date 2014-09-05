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
        string = trim(string);
        if (string === null || $.trim(string) === "")
        {
            toastr.error("Vui lòng nhập chuỗi cần tìm kiếm!");
        }
        else
        {
            location.href = url + "=" + trim(string);
        }
    }
    function trim(str)
    {
        return  str.replace(/^[\s]+/, '').replace(/[\s]+$/, '').replace(/[\s]{2,}/, ' ');
    }

});