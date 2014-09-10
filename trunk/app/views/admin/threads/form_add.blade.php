<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-new-window"></i>&nbsp;Thêm bài viết</div>
    <div class="panel-body">
        <form id="threads_form" class="form-horizontal" method="post" action="{{url('admin/add=baiviet')}}" enctype="multipart/form-data" role="form">
            <div class="form-group">
                <label for="tieude" class="col-sm-3 control-label">Tiêu đề:</label>
                <div class="col-sm-9">
                    <input name="tieude" type="text" class="form-control" id="tieude" value="" placeholder="Nhập tiêu đề bài viết" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="anhnho" class="col-sm-3 control-label">Ảnh nhỏ:</label>
                <div class="col-sm-9">
                    <input name="anhnho" type="file" class="form-control" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="sofax" class="col-sm-3 control-label">Loại bài viết:</label>
                <div class="col-sm-9">
                    <select name='loaibaiviet'  required="" class="form-control">
                        <option value='-1'>--Chọn 1 loại bài viết ---</option>
                        <option value='0'>Giới thiệu Forex</option>
                        <option value='1'>Chiến lược Forex</option>
                        <option value='2'>Kim loại quý</option>
                        <option value='3'>Hàng hóa</option>
                        <option value='4'>Cổ phiếu</option>
                        <option value='5'>Sàn giao dịch</option>
                        <option value='6'>Tin tức trong nước</option>
                        <option value='7'>Tin tức ngoài nước</option>
                        <option value='8'>Sản phẩm giao dịch</option>
                        <option value='9'>Kiến thức giao dịch</option>
                        <option value='10'>Kinh nghiệm giao dịch</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="noidung" class="col-sm-3 control-label">Nội dung:</label>
                <div class="col-sm-9">
                    <textarea id="noidung" name="noidung" class="form-control" required=""></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9"> 
                    <button class="btn btn-success" id='submitbtn' type='submit'>Đăng bài viết</button>
                    <button class="btn btn-warning" id='resetbtn' type='reset'>Làm lại</button>
                    <a class="btn btn-default" href="{{url('admin/ql=baiviet')}}">Quay lại</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    CKEDITOR.replace('noidung', {
        height: 400,
        toolbar: 'Full',
        //   filebrowserBrowseUrl : '/browser/browse.php',
        filebrowserUploadUrl: "{{url('upload/imgs')}}"
    });
</script>