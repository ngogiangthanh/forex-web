$(document).ready(function()
{
    $("#frmContact").submit(function(event)
    {
        // alert($(this).find('textarea[name="noidungtxt"]').val() );
        //    event.preventDefault();
        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
        var myurl = $(this).attr('action');
        $.ajax({
            type: "post",
            url: myurl,
            data: 'hoten=' + $(this).find('input[name="hotentxt"]').val()
                    + '&email=' + $(this).find('input[name="emailtxt"]').val()
                    + '&tieude=' + $(this).find('input[name="tieudetxt"]').val()
                    + '&noidung=' + $(this).find('textarea[name="noidungtxt"]').val(),
            success: function(data) {
                toastr.success("Ý kiến của bạn đã được gửi đi. Chúng tôi sẽ xem xét và phản hồi trong thời gian tới!.<br/>Cảm ơn bạn!");
                $("#form_contact_index").hide().fadeIn("slow").html(data.html);
            }}, 'html').fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('No response from server!');
        });
        return false;
    });
});