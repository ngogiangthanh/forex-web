@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <!-- tin trong nước -->
    <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-th-large"></span>&nbsp;TIN TRONG NƯỚC</h3></div>
            <div class="panel-body" id='tin_tn_index'>
               @include ('guest.news.tin_tn')
            </div>
        </div>
    </div>
    <div class="col-md-4">
        @include('guest.relations.index_views')
    </div>
</div>
@stop