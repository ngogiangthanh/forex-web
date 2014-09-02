<?php
    $dmuc = DB::table('tintuc')->get();
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="topmenubar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                
                <li class="dropdown">
                    <a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span> Trang chủ </a>
                </li>

                <li class="dropdown">
                    <a href="{{ url('news') }}">Tin tức</a>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Giao dịch <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('sanphamgd') }}">Sản phẩm giao dịch </a></li>   
                        <li><a href="{{ url('kinhnghiemgd') }}">Kinh nghiệm giao dịch </a></li> 
                        <li><a href="{{ url('chienluocgd') }}">Chiến lược giao dịch </a></li>                      
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="sangd">Sàn giao dịch </a>
                </li>

                <li class="dropdown">
                    <a href="{{ url('contact') }}">Liên hệ </a>
                </li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="{{ url('login') }}">Đăng nhập </a>
                </li>
            </ul>
            </li>
            </ul>
        </div>
    </div>
</div>
