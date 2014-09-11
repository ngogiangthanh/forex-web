@extends('layouts.admin')
@section('main')
<div id="menu">
    <a href="{{ url('/') }}" target="_blank" class="col-6 col-sm-4 col-lg-3">
        <i class="glyphicon glyphicon-home"></i>&nbsp;Trang chủ
    </a>
    <a href="{{ url('admin/ql=baiviet') }}" class="col-6 col-sm-4 col-lg-3">
        <i class="glyphicon glyphicon-th-list"></i>&nbsp;Quản lý bài viết
    </a>
    <a href="{{ url('admin/ql=lienhe') }}" class="col-6 col-sm-4 col-lg-3">
        <i class="glyphicon glyphicon-phone-alt"></i>&nbsp;Quản lý các liên hệ
    </a>
    <a href="{{ url('admin/ql=lienlac') }}" class="col-6 col-sm-4 col-lg-3">
        <i class="glyphicon glyphicon-phone"></i>&nbsp;Quản lý địa chỉ liên lạc
    </a>
</div>
@stop