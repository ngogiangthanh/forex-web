@extends('layouts.init_page')
<?php
    $allContacts = DB::table('contact')->get();
?>
@section('overview')
<div class="row">
    <!-- header content -->
    <div class="col-md-12">
        <div class="col-md-1" style="margin-top: 15px">
            <a href="{{url('/')}}"><img src="{{ asset('img/face_icon.jpg') }}" alt="image logo"></a>
        </div>
        <div class="col-md-8">
            <a href="{{url('/')}}"><img src="{{ asset('img/banner_page.png') }}" alt="image logo"></a>
        </div>
        <div class="col-md-3">
            <div class="input-group" style="margin-top: 30px">
                <input type="text" class="form-control" placeholder="Tìm kiếm">
                <span class="input-group-btn" style="margin-top:125px">
                  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div><!-- /input-group -->
        </div>
    </div>
</div>
<!-- all contact running -->
<div class="col-md-12" style="width: 1210px; height: 30px; background: #000000; margin-left: -35px;">
    <div style="margin-top: 7px">
        <marquee behavior="scroll" direction="left" scrollamount="3">
            @foreach ($allContacts as $ct)
                @if ($ct != null)
                &nbsp;<span class="name-contact" style="color: #FFFFFF  ">{{$ct->address}}</span>
                &nbsp;<span class="sdt-contact" style="color: #6600FF;">+{{$ct->tel}}</span>
                &nbsp;<span style="border-right: 2px solid red;"></span>
                @endif
            @endforeach
        </marquee>
    </div>
</div>
@stop

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-1 content-left"></div>
        <div class="col-md-10 content-middle" style="background: #F0F0F0;">    
            <!-- login -->
            <div class="col-md-12 news" style="margin-top: 20px">
                <div class="col-md-4">
       
                </div>
                 <div class="col-md-4">
                    @if (Session::has('flash_error'))
                    <div class="alert alert-danger" style="padding: 10px;">{{ Session::get('flash_error') }}</div>
                    @endif
                    @if (Session::has('flash_notice'))
                    <div class="alert alert-success" style="padding: 10px;">{{ Session::get('flash_notice') }}</div>
                    @endif
                    <div class="panel panel-default" style="background-color: #ffffff; border-color: #c5c5c5;">
                        <div class="panel-body" style="padding: 10px;">
                            <img src="{{ url('img/icon_login.jpg') }}" class="img-responsive round-img" style="margin: 20px auto;" />
                            {{ Form::open(array('url'=>'login','method'=>'POST','class'=>'form-signin')) }}

                            {{ Form::text('username','',array('placeholder' => 'Tên người dùng','class'=>'form-control')) }}
                            {{ Form::password('password',array('placeholder' => 'Mật khẩu','class'=>'form-control')) }}
                            <label class="checkbox">
                                {{ Form::checkbox('remember',0,false) }} Ghi nhớ đăng nhập
                            </label>{{ Form::submit('Đăng nhập', array('class' => 'btn btn-lg btn-success btn-block')) }}
                            </ul>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- all contact -->
            <div class="col-md-12 footer-contact">
                <div style="margin-top: 20px; margin-bottom: 20px">
                    <?php $i = 0; ?>
                    @foreach ($allContacts as $ct)
                        @if ($ct != null)
                            <?php $i++; ?>
                            
                            <div class="col-md-4 contact">
                                @if ($i > 3)
                                    <br>
                                @endif
                                <div class="name-contact">
                                    {{$ct->address}}
                                </div><br>
                                <div>Tel: +{{$ct->tel}}</div>
                                <div>Fax: +{{$ct->fax}}</div>
                                <div>Facebook: <a href="https://www.facebook.com/syluong282" style="color: #0000FF">{{$ct->facebook}}</a></div>
                                <div>Email:<a href="mailto:forextrader@gmail.com" style="color: #FF0000 "> {{$ct->email}}</a></div>
                            </div>  
                         @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-1 content-right"></div>  
    </div>
</div>
@stop
