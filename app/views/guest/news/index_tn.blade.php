@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <!-- tin trong nước -->
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">TIN TRONG NƯỚC</div>
            <div class="panel-body" id='tin_tn_index'>
               @include ('guest.news.tin_tn')
            </div>
        </div>
    </div>
</div>
@stop