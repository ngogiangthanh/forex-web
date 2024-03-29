<div class="col-md-2"></div>
<div class="col-md-6" style=" border: 3px inset #0000FF;">
    <center><h4>THAY ĐỔI MẬT KHẨU</h4></center>
    <div class="col-md-offset-3" style="margin: 25px;">
        <div class="loginForm-wrap">
            {{ Form::open(['action' => 'AdminController@changepassword', 'method' => 'POST']) }}

            <div class="form-group">
                <input class="form-control" type="password" name="oldpassword" id="" placeholder="Mật khẩu cũ..." required=""/>
            </div>

            <div class="form-group">
                <input class="form-control" type="password" name="newpassword" id="" placeholder="Mật khẩu mới..." required=""/>
            </div>

            <div class="form-group">
                <input class="form-control" type="password" name="password_confirmation" id="" placeholder="Nhập lại mật khẩu mới..." required=""/>
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Thay đổi"/>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>

<script>
<?php
if (isset($update_success)) {
    ?>
        toastr.success('{{$update_success}}')       
    <?php
    Session::forget('$update_success');
}
?>
<?php
if (isset($update_error)) {
    ?>
        toastr.error('{{$update_error}}')
    <?php
    Session::forget('$update_error');
}
?>
</script>