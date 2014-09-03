@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 20px">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">KINH NGHIỆM GIAO DỊCH</div>
            <div class="panel-body" id="kinhnghiemgd_content">
                @include ('guest.chienluocvang.index_kn')
            </div>
        </div>
    </div>
</div>
</div>
@stop