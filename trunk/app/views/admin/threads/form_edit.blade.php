@if($thread != null)
<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-new-window"></i>&nbsp;Sửa bài viết</div>
    <div class="panel-body">
        <form id="threads_form_edit" class="form-horizontal" method="post" action="{{url('admin/edit=baiviet')}}" enctype="multipart/form-data" role="form">
            <div class="form-group">
                <label for="tieude" class="col-sm-3 control-label">Tiêu đề:</label>
                <div class="col-sm-9">
                    <input name="id" type="hidden" value="{{$thread->id}}"/>
                    <input name="tieude" type="text" class="form-control" id="tieude" value="{{{$thread->tieude}}}" placeholder="Nhập tiêu đề bài viết" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="anhnho" class="col-sm-3 control-label">Ảnh nhỏ:</label>
                <div class="col-sm-9">
                    <input name="anhnho" type="file" class="form-control" accept="image/*"/>
                    <input name="anhcu" type="hidden" value="{{$thread->anhnho}}"/>
                    <br/>
                    @if(file_exists($thread->anhnho))
                    {{ HTML::image($thread->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
                    @else
                    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="loaibaiviet" class="col-sm-3 control-label">Loại bài viết:</label>
                <div class="col-sm-9">
                    <select name='loaibaiviet' class="form-control">
                        <option value='-1'>--Chọn 1 loại bài viết ---</option>
                        <option value='0' {{$thread->loai == 0 ? "selected='selected'" : ""}}>Giới thiệu Forex</option>
                        <option value='1' {{$thread->loai == 1 ? "selected='selected'" : ""}}>Chiến lược Forex</option>
                        <option value='2' {{$thread->loai == 2 ? "selected='selected'" : ""}}>Kim loại quý</option>
                        <option value='3' {{$thread->loai == 3 ? "selected='selected'" : ""}}>Hàng hóa</option>
                        <option value='4' {{$thread->loai == 4 ? "selected='selected'" : ""}}>Cổ phiếu</option>
                        <option value='5' {{$thread->loai == 5 ? "selected='selected'" : ""}}>Sàn giao dịch</option>
                        <option value='6' {{$thread->loai == 6 ? "selected='selected'" : ""}}>Tin tức trong nước</option>
                        <option value='7' {{$thread->loai == 7 ? "selected='selected'" : ""}}>Tin tức ngoài nước</option>
                        <option value='8' {{$thread->loai == 8 ? "selected='selected'" : ""}}>Sản phẩm giao dịch</option>
                        <option value='9' {{$thread->loai == 9 ? "selected='selected'" : ""}}>Kiến thức giao dịch</option>
                        <option value='10' {{$thread->loai == 10 ? "selected='selected'" : ""}}>Kinh nghiệm giao dịch</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="noidung" class="col-sm-3 control-label">Nội dung:</label>
                <div class="col-sm-9">
                    <textarea id="noidung" name="noidung" class="form-control" required="">{{{$thread->noidung}}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9"> 
                    <button class="btn btn-success" id='submitbtnedit' type='submit'>Sửa bài viết</button>
                    <a class="btn btn-default" href="{{url('admin/ql=baiviet')}}">Quay lại</a>
                </div>
            </div>
        </form>
    </div>
</div>
{{ HTML::script('js/ckeditor/ckeditor.js'); }}
<script type="text/javascript">
    CKEDITOR.replace('noidung', {
        height: 400,
        toolbar: 'Full',
        //   filebrowserBrowseUrl : '/browser/browse.php',
        filebrowserUploadUrl: "{{url('upload/imgs')}}"
    });
<?php
if (isset($message)) {
    ?>
        toastr.success('{{$message}}')
    <?php
}
?>
</script>
@else
<script>location.href = "{{url('admin/ql=baiviet')}}";</script>
@endif