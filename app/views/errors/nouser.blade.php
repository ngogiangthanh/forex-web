@extends('layouts.login')

@section('main')
<div class="row">
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default panel-body">
                    <h2>Bạn không được phép sử dụng hệ thống</h2>
                    <p>Tài khoản này chưa được kích hoạt cho hệ thống này.<br />Xin vui lòng liên hệ với người quản trị để kích hoạt sử dụng hệ thống.</p>
                    <a class="btn btn-default" href="{{ url('/logout') }}">Quay lại trang chủ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop