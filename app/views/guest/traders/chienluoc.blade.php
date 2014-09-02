@extends('layouts.guest')
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-1 content-left"></div>
        <div class="col-md-10 content-middle" style="background: #F0F0F0;">    
            <!-- news -->
            <div class="col-md-12 news" style="margin-top: 20px">
               Chien luoc giao dich
            </div>
            <!-- all contact -->
            @include('guest.footer.index')
        </div>
        <div class="col-md-1 content-right"></div>  
    </div>
</div>
@stop