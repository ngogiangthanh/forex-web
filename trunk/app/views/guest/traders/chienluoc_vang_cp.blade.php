@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading"><h3>CỔ PHIẾU</h3></div>
            <div class="panel-body" id="cophieu_content">
                @include ('guest.chienluoc.chienluocvang.index_cp')
            </div>
        </div>
    </div>
</div>
@stop