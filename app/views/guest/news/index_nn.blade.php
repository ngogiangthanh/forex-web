@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <!-- tin ngoài nước -->
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading"><h3>TIN NGOÀI NƯỚC</h3></div>
            <div class="panel-body" id='tin_nn_index'>
               @include ('guest.news.tin_nn')
            </div>
        </div>
    </div>
</div>
@stop