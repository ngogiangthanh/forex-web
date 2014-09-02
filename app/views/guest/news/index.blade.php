@extends('layouts.guest')
<?php
    $allContacts = DB::table('contact')->get();
?>

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-1 content-left"></div>
        <div class="col-md-10 content-middle" style="background: #F0F0F0;">    
            <!-- news -->
            <div class="col-md-12 news" style="margin-top: 20px">
                <!-- tin trong nước -->
                <div class="col-md-5 tintn">
                    <div class="col-md-10">
                        <p style="font-size: 18px; font-weight: bold; font-family: Georgia">Tin Trong Nước</p>
                    </div>
                    <div class="col-md-12">
                        (Chưa có tin).
                    </div>
                </div>
                <!-- tin ngoài nước -->
                <div class="col-md-5 tinqt">
                    <div class="col-md-10">
                        <p style="font-size: 18px; font-weight: bold; font-family: Georgia">Tin Quốc Tế</p>
                    </div>
                    <div class="col-md-12">
                        (Chưa có tin).
                    </div>
                </div>
            </div>
            <!-- all contact -->
            @include('guest.footer.index')
        </div>
        <div class="col-md-1 content-right"></div>  
    </div>
</div>
@stop