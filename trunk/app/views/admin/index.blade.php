@extends('layouts.admin')
@section('main')
<div id="menu">
    <a href="{{ url('/') }}" target="_blank" class="col-6 col-sm-4 col-lg-3">
        <i class="glyphicon glyphicon-home"></i>&nbsp;Trang chủ
    </a>
    <a href="{{ url('admin/qltintuc') }}" class="col-6 col-sm-4 col-lg-3">
        <i class="glyphicon glyphicon-th-list"></i>&nbsp;Quản lý tin tức
    </a>
    <a href="{{ url('admin/qlgiaodich') }}" class="col-6 col-sm-4 col-lg-3">
        <i class="glyphicon glyphicon-book"></i>&nbsp;Quản lý giao dịch
    </a>
    <a href="{{ url('admin/qlsangiaodich') }}" class="col-6 col-sm-4 col-lg-3">
        <i class="glyphicon glyphicon-list-alt"></i>&nbsp;Quản lý sàn giao dịch
    </a>
    <a href="{{ url('admin/qllienhe') }}" class="col-6 col-sm-4 col-lg-3">
        <i class="glyphicon glyphicon-gift"></i>&nbsp;Quản lý liên hệ
    </a>
    <a href="{{ url('admin/qllienlac') }}" class="col-6 col-sm-4 col-lg-3">
        <i class="glyphicon glyphicon-phone"></i>&nbsp;Quản lý liên lạc
    </a>
</div>
@stop