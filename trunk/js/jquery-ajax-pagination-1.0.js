$(document).ready(function()
{
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
    $("#exp_gold_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=kinhnghiemgd',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#kinhnghiemgd_content").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    $("#fa_gold_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=phantichfa',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#phantichfa_content").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
    $("#ta_gold_paging a").click(function()
    {
        var myurl = $(this).attr('href');
        $.ajax(
                {
                    url: myurl + '&type=phantichta',
                    type: "get",
                    datatype: "html"
                }).done(function(data) {
            $("#phantichta_content").hide().fadeIn("slow").html(data.html);
        }).fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
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
});