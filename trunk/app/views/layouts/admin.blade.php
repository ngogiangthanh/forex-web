<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>{{$title}}</title>
        <link rel="shortcut icon" href="{{ URL::to('favicon_img.ico') }}">
        <!-- Bootstrap -->
        {{ HTML::style('css/bootstrap.min.css') }}
        <!-- Custom styles for this template -->
        {{ HTML::style('css/admin.css') }}
        {{ HTML::style('css/toastr.css') }}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="public/js/html5shiv.js"></script>
        <script src="public/js/respond.min.js"></script>
        <![endif]-->
        {{ HTML::script('js/jquery-1.10.2.min.js') }}
        {{ HTML::script('js/toastr.js') }}
        {{ HTML::script('js/functions.js')}}
        <style>
            body {
                font-family: "Times New Roman", Times, serif !important;
                font-size: 15px
            }
        </style>
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
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/jquery-ajax-search-admin-1.0.js') }}
        {{ HTML::script('js/jquery-ajax-checklh-admin-1.0.js') }}
        {{ HTML::script('js/jquery-ajax-delete-admin-1.0.js') }}
        {{ HTML::script('js/bootstrap.notify.min.js') }}
        {{ HTML::script('js/jquery-threads_admin-1.0.js') }}
        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebar .panel-heading').click(function() {
                    $('#sidebar .list-group').toggleClass('hidden-xs');
                    $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
                });
            });
        </script>
        <!-- Modal -->
        <div id="loader" class="panel panel-default hide">
            <h4>Đang thực thi...</h4>
            <div class="progress progress-striped active">
                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
            </div>
        </div>
    </body>
</html>