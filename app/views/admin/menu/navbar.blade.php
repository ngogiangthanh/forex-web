<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('admin') }}"><i class="glyphicon glyphicon-th-large"></i>&nbsp;Trang Quản lý</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;Xin chào,&nbsp;{{Auth::user()->username}}<b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li><a href="{{ url('admin/ql=doimatkhau') }}"><span class="glyphicon glyphicon-edit"></span>&nbsp;Đổi mật khẩu</a>
                        </li>  
                        <li class="divider"></li> 
                        <li><a href="{{ url('logout') }}" onclick="if (confirm('Xác nhận đăng xuất?')) {
                                    return true;
                                } else {
                                    return false;
                                }"><span class="glyphicon glyphicon-off"></span>&nbsp;Thoát</a>
                        </li>                      
                    </ul>
                </li>
            </ul>
            </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<style type="text/css">
    .dropdown-menu>li>a:hover {
        color: #000;
        font-weight: normal;
        font-size: 14px;
    }
    .dropdown-menu>li>a {
        color: #000;
    }
</style>