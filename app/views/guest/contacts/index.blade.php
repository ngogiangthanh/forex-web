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
        Mọi chi tiết xin liên hệ  <a href="#" style="color: #0000FF">ForexkerMarket.com.vn</a>
    </div>
    <div style="margin-top: 7px;">
        <span><img src="{{asset('img/Phone-icon.png')}}"/> &nbsp;</span>  
        Phone numer: 0123xxxxxxxx.
    </div>
    <div style="margin-top: 7px;">
        <span><img src="{{asset('img/Email-icon.png')}}"/> &nbsp; </span>  
        Email: <a href="mailto:forextrader@gmail.com" style="color: #FF0000 "> forexkermarket@gmail.com</a>
    </div>
    <div style="margin-top: 7px;">
        <span><img src="{{asset('img/face-icon.png')}}" height="24px" width="24px"/> &nbsp;</span>  
        Facebook: <a href="https://www.facebook.com/syluong282" style="color: #0000FF">forexkermarket@gmail.com</a>
    </div>
    <!-- Contact email -->
    <br/><br/>
    <div>
        <div class="title-email">
            Forexker Market luôn trân trọng ý kiến đóng góp cũng như những thắc mắc về giao dịch. 
            Xin hãy gửi thử cho chúng tôi qua email hoặc dùng mẫu sau:
        </div>
        <!-- form email-->
        <div class="email-demo" style="margin-top: 10px;">
            <div class="col-md-12">
                <div class="col-md-3">Họ và Tên: </div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="nhập họ và tên" width="50px"></div>
                <div class="col-md-3" style="color: red;">(*)</div>
            </div>
            <div class="col-md-12" style="margin-top: 10px;">
                <div class="col-md-3">Email: </div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="nhập email"></div>
                <div class="col-md-3" style="color: red;">(*)</div>
            </div>
            <div class="col-md-12" style="margin-top: 10px;">
                <div class="col-md-3">Tiêu đề: </div>
                <div class="col-md-9"><input type="text" class="form-control" placeholder="nhập tiêu đề"></div>
            </div>
            <div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px;">
                <div class="col-md-3">Nội dung: </div>
                <div class="col-md-9"><textarea rows="4" cols="50" placeholder="nhập nội dung"></textarea></div>
            </div>
            <div class="col-lg-offset-5">
                <button id="btn-send-contact" type="button" class="btn btn-success">Gửi ý kiến</button>
                <button id="btn-send-contact" type="button" class="btn btn-success">Xóa</button>
            </div>
        </div>
    </div>
</div>
<!-- rigth contact -->
<div class="col-md-3">
</div>
@stop