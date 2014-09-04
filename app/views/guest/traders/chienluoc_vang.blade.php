@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <!-- chiến lược forex -->
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">KIM LOẠI QUÝ</div>
            <div class="panel-body" id="kimloaiquy_content">
                @include ('guest.chienluoc.chienluocvang.index_klq')
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">HÀNG HÓA</div>
            <div class="panel-body" id="hanghoa_content">
                @include ('guest.chienluoc.chienluocvang.index_hh')
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">CỔ PHIẾU</div>
            <div class="panel-body" id="cophieu_content">
                @include ('guest.chienluoc.chienluocvang.index_cp')
            </div>
        </div>
    </div>
</div>
@stop