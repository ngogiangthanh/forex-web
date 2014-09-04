@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">HÀNG HÓA</div>
            <div class="panel-body" id="hanghoa_content">
                @include ('guest.chienluoc.chienluocvang.index_hh')
            </div>
        </div>
    </div>
</div>
@stop