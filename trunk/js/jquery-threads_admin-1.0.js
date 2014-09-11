$(document).ready(function()
{
    //xoa noi dung khi click
    $('#resetbtn').click(function() {
        CKEDITOR.instances.noidung.setData('');
    });

    $("#threads_form").submit(function(event)
    {
        var tieude = fulltrim($(this).find('input[name="tieude"]').val());
        var anhnho = $(this).find('input[name="anhnho"]').val();
        var loaibv = $(this).find('select[name="loaibaiviet"]').val();
        var noidung = CKEDITOR.instances['noidung'].getData();
        if (tieude === "" || tieude === null)
        {
            toastr.error("Vui lòng nhập tiêu đề!");
            $(this).find('input[name="tieude"]').focus();
        }
        else if (anhnho === "" || anhnho === null)
        {
            toastr.error("Vui lòng chọn ảnh nhỏ đại diện cho bài viết!");
            $(this).find('input[name="anhnho"]').focus();
        }
        else if (loaibv === "-1")
        {
            toastr.error("Vui lòng chọn loại bài viết!");
            $(this).find('select[name="loaibaiviet"]').focus();
        }
        else if (noidung === "" || noidung === null)
        {
            toastr.error("Vui lòng nhập nội dung bài viết!");
            $(this).find('textarea[name="noidung"]').focus();
        }
        else {
            return true;
        }
        return false;
    });


    $("#threads_form_edit").submit(function(event)
    {
        var tieude = fulltrim($(this).find('input[name="tieude"]').val());
        var loaibv = $(this).find('select[name="loaibaiviet"]').val();
        var noidung = CKEDITOR.instances['noidung'].getData();
        if (tieude === "" || tieude === null)
        {
            toastr.error("Vui lòng nhập tiêu đề!");
            $(this).find('input[name="tieude"]').focus();
        }
        else if (loaibv === "-1")
        {
            toastr.error("Vui lòng chọn loại bài viết!");
            $(this).find('select[name="loaibaiviet"]').focus();
        }
        else if (noidung === "" || noidung === null)
        {
            toastr.error("Vui lòng nhập nội dung bài viết!");
            $(this).find('textarea[name="noidung"]').focus();
        }
        else {
            return true;
        }
        return false;
    });
});