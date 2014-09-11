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
                    <a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span>&nbsp;Trang chủ</a>
                </li>

                <li class="dropdown">
                    <a href="{{ url('news') }}"><span class="glyphicon glyphicon-list"></span>&nbsp;Tin tức</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-barcode"></span>&nbsp;Giao dịch <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li class="dropdown-submenu"><a href="{{ url('chienluoc') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Chiến lược giao dịch </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="{{ url('chienluoc/vang') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Chiến lược vàng</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('chienluoc/vang_klq') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Kim loại quý</a></li>
                                        <li><a href="{{ url('chienluoc/vang_hh') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Hàng hóa</a></li>
                                        <li><a href="{{ url('chienluoc/vang_cp') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Cổ phiếu</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('chienluoc/forex') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Chiến lược Forex</a></li>
                            </ul>
                        </li>                      
                        <li class="divider"></li>
                        <li><a href="{{ url('sanpham') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Sản phẩm giao dịch </a></li>   
                        <li><a href="{{ url('kinhnghiem') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Kinh nghiệm giao dịch </a></li> 
                        <li><a href="{{ url('kienthuc') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Kiến thức giao dịch </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="{{ url('sangd') }}"><span class="glyphicon glyphicon-flag"></span>&nbsp;Sàn giao dịch </a>
                </li>

                <li class="dropdown">
                    <a href="{{ url('contact') }}"><span class="glyphicon glyphicon-phone"></span>&nbsp;Liên hệ </a>
                </li>
            </ul>
            @if(Auth::check())
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;Xin chào,&nbsp;{{Auth::user()->username}}<b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        @if(Auth::user()->roles == 1)
                        <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span>&nbsp;Trang quản lý</a>
                        </li>  
                        <li class="divider"></li> 
                        @endif
                        <li><a href="{{ url('logout') }}" onclick="if (confirm('Xác nhận đăng xuất?')) {
                                    return true;
                                } else {
                                    return false;
                                }"><span class="glyphicon glyphicon-off"></span>&nbsp;Thoát</a>
                        </li>                      
                    </ul>
                </li>
            </ul>
            @else
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Đăng nhập </a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</div>
{{ HTML::style('css/bootstrap-menu.dropdown.css') }}