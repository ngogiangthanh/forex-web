@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <!-- chiến lược forex -->
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading"><h3>CHIẾN LƯỢC FOREX</h3></div>
            <div class="panel-body" id='forex_index'>
                @include ('guest.chienluoc.forex.index')
            </div>
        </div>
    </div>
</div>
@stop