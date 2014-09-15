@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <!-- tin trong nước -->
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-th-large"></span>&nbsp;Tin Trong Nước</h3></div>
            <div class="panel-body" id='tin_tn_index'>
                @include ('guest.news.tin_tn')
            </div>
        </div>
    </div>
    <!-- tin ngoài nước -->
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-th-large"></span>&nbsp;Tin Ngoài Nước</h3></div>
            <div class="panel-body" id='tin_nn_index'>
                @include ('guest.news.tin_nn')
            </div>
        </div>
    </div>
</div>
@stop