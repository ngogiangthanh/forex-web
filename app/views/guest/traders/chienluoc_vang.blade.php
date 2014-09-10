@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <!-- chiến lược forex -->

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading"><h3>KIM LOẠI QUÝ</h3></div>
                <div class="panel-body" id="kimloaiquy_content">
                    @include ('guest.chienluoc.chienluocvang.index_klq')
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading"><h3>HÀNG HÓA</h3></div>
                <div class="panel-body" id="hanghoa_content">
                    @include ('guest.chienluoc.chienluocvang.index_hh')
                </div>
            </div>
        </div>
    </div>
    <div class="row col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading"><h3>CỔ PHIẾU</h3></div>
            <div class="panel-body" id="cophieu_content">
                @include ('guest.chienluoc.chienluocvang.index_cp')
            </div>
        </div>
    </div>
</div>
@stop