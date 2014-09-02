<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="{{ url('favicon.ico'); }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/bootstrap-theme.min.css'); }}
        {{ HTML::style('css/style.css'); }}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <style>
            body {
                padding-bottom: 40px;
            }

            .login-overview {
                height: 3px;
                background-image: url(img/colorline.png);
                margin-bottom: 20px;
            }

            .login-header {
                background-color: #f1f1f1;
                height: 54px;
                border-bottom: solid 1px #e5e5e5;
                padding: 0 15px;
            }

            .login-title {
                margin: 15px;
            }

            .login-logo {
                background: url(img/logo.png) bottom;
                width: 80px;
                height: 75px;
            }
        </style>
        <title>[{{ Hethong::getValue('text_product') }}] </title>
    </head>
    <body>
        <div class="login-header">
            <div class="login-logo pull-left"></div>
            <h3 class="login-title pull-left hidden-xs hidden-sm">HỆ THỐNG HỖ TRỢ CÔNG TÁC QUẢN LÝ SINH VIÊN</h3>
            <a href="#" class="btn btn-danger btn-sm pull-right" style="margin-top: 12px;"> <span class="glyphicon glyphicon-question-sign"></span> Trợ giúp</a>
        </div>
        <div class="login-overview"></div>
        <div class="container">
            @yield('main')
            <hr>
            <footer>
                <p>© CIT 2013</p>
            </footer>
        </div>
        
    </body>
</html>