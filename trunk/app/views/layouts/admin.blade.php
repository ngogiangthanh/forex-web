<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Admin Forex</title>
        <link rel="shortcut icon" href="{{ URL::to('favicon_img.ico') }}">
        <!-- Bootstrap -->
        {{ HTML::style('css/bootstrap.min.css') }}
        <!-- Custom styles for this template -->
        {{ HTML::style('css/admin.css') }}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="public/js/html5shiv.js"></script>
        <script src="public/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @include ('admin.menu.navbar')
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 pull-right">
                    <div class="row">
                        <!-- BEGIN CONTENT -->
                        @yield('main')
                        <!-- END CONTENT -->
                    </div>
                </div><!--/span-->            
            </div><!--/row-->
        </div><!--/.container-->
        {{ HTML::script('js/jquery-1.10.2.min.js') }}
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('js/bootstrap.min.js') }}
        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebar .panel-heading').click(function() {
                    $('#sidebar .list-group').toggleClass('hidden-xs');
                    $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
                });
            });
        </script>
    </body>
</html>