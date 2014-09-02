{{ HTML::style('css/bootstrap.min.css'); }}
{{ HTML::style('css/bootstrap-theme.min.css'); }}
{{ HTML::style('css/style.css'); }}

<div style="text-align: center; margin: 25px;">
    <br><br>
    <img src="{{ url('img/noauth.png') }}">
    <br><br>
    <h3>Mật khẩu bạn vừa nhập không hợp lệ hoặc bạn không được phép truy cập vào hệ thống quản lý điểm để in điểm, vui lòng thử lại.</h3>
    <button class="btn btn-default" onclick="parent.$('#inWin').modal('hide')">Quay lại</button>
</div>