$(document).ready(function()
{
    //xoa noi dung khi click
    $('#btn_reset').click(function() {
        CKEDITOR.instances.noidungtxt.setData('');
    });
    //
    $("#frmContact").submit(function(event)
    {
        var hoten = fulltrim($(this).find('input[name="hotentxt"]').val());
        var email = fulltrim($(this).find('input[name="emailtxt"]').val());
        var tieude = fulltrim($(this).find('input[name="tieudetxt"]').val());
        var noidung = CKEDITOR.instances['noidungtxt'].getData();
        if (hoten === "" || hoten === null)
        {
            toastr.error("Vui lòng nhập họ tên của bạn!");
            $(this).find('input[name="hotentxt"]').focus();
        }
        else if (email === "" || email === null)
        {
            toastr.error("Vui lòng nhập email của bạn!");
            $(this).find('input[name="emailtxt"]').focus();
        }
        else if (tieude === "" || tieude === null)
        {
            toastr.error("Vui lòng nhập tiêu đề!");
            $(this).find('input[name="tieudetxt"]').focus();
        }
        else if (noidung === "" || noidung === null)
        {
            toastr.error("Vui lòng nhập nội dung!");
            $(this).find('textarea[name="noidungtxt"]').focus();
        }
        else {
            $.ajaxSetup({
                headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
            });
            var myurl = $(this).attr('action');
            $.ajax({
                type: "post",
                url: myurl,
                data: 'hoten=' + hoten
                        + '&email=' + email
                        + '&tieude=' + tieude
                        + '&noidung=' + noidung,
                success: function(data) {
                    toastr.success("Ý kiến của bạn đã được gửi đi. Chúng tôi sẽ xem xét và phản hồi trong thời gian tới!.<br/>Cảm ơn bạn!");
                    $("#form_contact_index").hide().fadeIn("slow").html(data.html);
                }}, 'html').fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('No response from server!');
            });
        }
        return false;
    });
});