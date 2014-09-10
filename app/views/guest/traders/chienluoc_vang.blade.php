@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <!-- chiến lược forex -->

    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-star"></span>&nbsp;KIM LOẠI QUÝ</h3></div>
            <div class="panel-body" id="kimloaiquy_content">
                @include ('guest.chienluoc.chienluocvang.index_klq')
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-star"></span>&nbsp;HÀNG HÓA</h3></div>
            <div class="panel-body" id="hanghoa_content">
                @include ('guest.chienluoc.chienluocvang.index_hh')
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-star"></span>&nbsp;CỔ PHIẾU</h3></div>
            <div class="panel-body" id="cophieu_content">
                @include ('guest.chienluoc.chienluocvang.index_cp')
            </div>
        </div>
    </div>
</div>
@stop