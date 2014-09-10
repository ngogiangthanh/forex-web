<div class="row">
    <!-- header content -->
    <div class="col-md-12">
        <div class="col-md-1" style="margin-top: 15px">
            <a href="{{url('/')}}"><img src="{{ asset('img/face_icon.jpg') }}" alt="left Forex logo" width="70px" title="Sàn giao dịch Forex"></a>
        </div>
        <div class="col-md-8">
            <a href="{{url('/')}}"><img src="{{ asset('img/banner_page.png') }}" alt="right Forex logo" width="100%" title="Sàn giao dịch Forex"></a>
        </div>
        <div class="col-md-3">
            <div class="input-group" style="margin-top: 30px">
                <input type="text" class="form-control" id="search" placeholder="Nhập thông tin cần tìm kiếm" title="Nhập thông tin cần tìm kiếm"/>
                <input type="hidden" name="urlsearch" id="urlsearch" value="{{url('search')}}"/>
                <span class="input-group-btn">
                    <button class="btn btn-default" id="btnsearch" type="button" title="Tìm kiếm"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div><!-- /input-group -->
        </div>
    </div>
</div>
<!-- all contact running -->
<div class="col-md-12" style="background: #000000;margin-top: 20px">
    <div style="vertical-align: middle">
        <h4>
            <marquee behavior="scroll" direction="left" scrollamount="3">
                @foreach ($contacts as $ct)
                @if ($ct != null)
                &nbsp;<span class="name-contact" style="color: #FFFFFF  ">{{$ct->address}}</span>
                &nbsp;<span class="sdt-contact" style="color: #6600FF;">+{{$ct->tel}}</span>
                &nbsp;<span style="border-right: 2px solid red;"></span>
                @endif
                @endforeach
            </marquee>
        </h4>
    </div>
</div>