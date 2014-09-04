$(document).ready(function()
{
    //chien luoc forex
    $("#forex_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=forex',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#forex_index").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    //chien luoc vang - kim loai quy
    $("#kimloaiquy_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=kimloaiquy',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#kimloaiquy_content").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    //chien luoc vang - hang hoa
    $("#hanghoa_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=hanghoa',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#hanghoa_content").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    //chien luoc vang - co phieu
    $("#cophieu_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=cophieu',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#cophieu_content").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    //san giao dich
    $("#sangd_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=sangd',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#floortraders_index").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    //tin tuc - tin trong nuoc
    $("#tin_tn_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=tin_tn',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#tin_tn_index").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    //tin tuc - tin ngoai nuoc
    $("#tin_nn_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=tin_nn',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#tin_nn_index").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    //giao dich - kien thuc giao dich
    $("#kienthuc_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=kienthuc',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#kienthuc_index").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    //giao dich - san pham giao dich
    $("#sp_gd_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=sp_gd',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#sp_gd_index").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    //giao dich - kinh nghiem giao dich
    $("#kinhnghiem_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=kinhnghiem',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#kinhnghiem_content").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    //tìm kiếm
    $("#result_search_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=search',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#result_search_index").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
});