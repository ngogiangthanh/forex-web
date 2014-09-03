@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <!-- tin trong nước -->
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">TIN TRONG NƯỚC</div>
            <div class="panel-body" id='tin_tn_index'>
               @include ('guest.news.index_tn')
            </div>
        </div>
    </div>
    <!-- tin ngoài nước -->
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">TIN NGOÀI NƯỚC</div>
            <div class="panel-body" id='tin_nn_index'>
               @include ('guest.news.index_nn')
            </div>
        </div>
    </div>
</div>
@stop