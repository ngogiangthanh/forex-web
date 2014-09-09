@extends('layouts.guest')
@section('main')
<!-- left contact -->
<div class="col-md-3">  
</div>
<!-- content contact -->
<div class="col-md-6 contact-email">
    <p style="font-weight: bold; font-size: 25px;">Liên Hệ</p>
    <div style="margin-top: 20px">
        <span class="glyphicon glyphicon-hand-right hand-green">&nbsp;</span>  
        Mọi chi tiết xin liên hệ  <a href="{{url('/')}}" style="color: #0000FF">ForexkerMarket</a>
    </div>
    <div style="margin-top: 7px;">
        <span><img src="{{asset('img/Phone-icon.png')}}"/> &nbsp;SĐT:&nbsp;</span>  
        <?= $supportContact != null ? $supportContact->tel : ""?>
    </div>
    <div style="margin-top: 7px;">
        <span><img src="{{asset('img/Email-icon.png')}}"/> &nbsp;Email:&nbsp;</span>  
        <a href="mailto:<?= $supportContact != null ? $supportContact->email : ""?>" style="color: #FF0000 "> 
        <?= $supportContact != null ? $supportContact->email : ""?>
        </a>
    </div>
    <div style="margin-top: 7px;">
        <span><img src="{{asset('img/face-icon.png')}}" height="24px" width="24px"/> &nbsp;Facebook:&nbsp;</span>  
         <a href="<?= $supportContact != null ? $supportContact->facebook : ""?>" style="color: #0000FF">
            <?= $supportContact != null ? $supportContact->facebook : ""?>
         </a>
    </div>
    <hr>
    <!-- Contact email -->
    <div id='form_contact_index' style="width: 100%">
        @include('guest.contacts.form')
    </div>
</div>
<!-- rigth contact -->
<div class="col-md-3">
</div>
@stop