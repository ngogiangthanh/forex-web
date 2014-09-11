$(document).ready(function()
{
    $("#lienhe_form").submit(function(event)
    {
        var tenbophan = fulltrim($(this).find('input[name="tenbophan"]').val());
        var sodienthoai = fulltrim($(this).find('input[name="sodienthoai"]').val());
        var sofax = fulltrim($(this).find('input[name="sofax"]').val());
        var email = fulltrim($(this).find('input[name="email"]').val());
        var facebook = fulltrim($(this).find('input[name="facebook"]').val());
        var vitri = $(this).find('select[name="vitri"]').val();
        var urlfacebook = fulltrim($(this).find('input[name="urlfacebook"]').val());
        if (tenbophan === "" || tenbophan === null)
        {
            toastr.error("Vui lòng nhập tên bộ phận liên lạc!");
            $(this).find('input[name="tenbophan"]').focus();
        }
        else if (sodienthoai === "" || sodienthoai === null)
        {
            toastr.error("Vui lòng nhập số điện thoại liên lạc!");
            $(this).find('input[name="sodienthoai"]').focus();
        }
        else if (sofax === "" || sofax === null)
        {
            toastr.error("Vui lòng nhập số fax liên lạc!");
            $(this).find('input[name="sofax"]').focus();
        }
        else if (email === "" || email === null)
        {
            toastr.error("Vui lòng nhập email liên lạc!");
            $(this).find('input[name="email"]').focus();
        }
        else if (facebook === "" || facebook === null)
        {
            toastr.error("Vui lòng nhập tên facebook liên lạc!");
            $(this).find('input[name="facebook"]').focus();
        }
        else if (urlfacebook === "" || urlfacebook === null)
        {
            toastr.error("Vui lòng nhập url facebook!");
            $(this).find('input[name="urlfacebook"]').focus();
        }
        else if (vitri === "-1")
        {
            toastr.error("Vui lòng chọn vị trí hiển thị trên website!");
            $(this).find('select[name="vitri"]').focus();
        }
        else {
            return true;
        }
        return false;
    });
});