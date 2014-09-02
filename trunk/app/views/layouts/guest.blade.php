<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="{{ URL::to('favicon_img.ico') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/bootstrap-theme.min.css') }}
        {{ HTML::style('css/style.css') }}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        {{ HTML::script('js/jquery-1.10.2.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/bootstrap.notify.min.js') }}

        <!--jqWidget-->
        {{ HTML::style('js/jqwidgets/styles/jqx.base.css') }}
        {{ HTML::style('js/jqwidgets/styles/jqx.bootstrap.css') }}
        {{ HTML::script('js/jqwidgets/jqxcore.js') }}
        {{ HTML::script('js/jqwidgets/jqxdata.js') }}
        {{ HTML::script('js/jqwidgets/jqxdata.export.js') }}
        {{ HTML::script('js/jqwidgets/jqxbuttons.js') }}
        {{ HTML::script('js/jqwidgets/jqxscrollbar.js') }}
        {{ HTML::script('js/jqwidgets/jqxmenu.js') }}
        {{ HTML::script('js/jqwidgets/jqxchart.js') }}
        {{ HTML::script('js/jqwidgets/jqxinput.js') }}
        {{ HTML::script('js/jqwidgets/jqxcheckbox.js') }}
        {{ HTML::script('js/jqwidgets/jqxlistbox.js') }}
        {{ HTML::script('js/jqwidgets/jqxdropdownlist.js') }}
        {{ HTML::script('js/jqwidgets/jqxmaskedinput.js') }}
        {{ HTML::script('js/jqwidgets/jqxnumberinput.js') }}
        {{ HTML::script('js/jqwidgets/jqxdatetimeinput.js') }}
        {{ HTML::script('js/jqwidgets/jqxcalendar.js') }}
        {{ HTML::script('js/jqwidgets/jqxvalidator.js') }}
        {{ HTML::script('js/jqwidgets/jqxgrid.js') }}
        {{ HTML::script('js/jqwidgets/jqxgrid.sort.js') }}
        {{ HTML::script('js/jqwidgets/jqxgrid.pager.js') }}
        {{ HTML::script('js/jqwidgets/jqxgrid.selection.js') }}
        {{ HTML::script('js/jqwidgets/jqxgrid.filter.js') }}
        {{ HTML::script('js/jqwidgets/jqxgrid.columnsresize.js') }}
        {{ HTML::script('js/jqwidgets/jqxgrid.columnsreorder.js ') }}
        {{ HTML::script('js/jqwidgets/jqxgrid.export.js') }}
        {{ HTML::script('js/jqwidgets/jqxgrid.edit.js') }}
        {{ HTML::script('js/jqwidgets.vi.js') }}
        {{ HTML::script('js/import-export-data.js') }}
        
        <style>
            body {
                margin-top: 50px;
            }
            
            #helper {
                -webkit-box-shadow: 0px 0px 10px rgba(50, 50, 50, 0.3);
                -moz-box-shadow: 0px 0px 10px rgba(50, 50, 50, 0.3);
                box-shadow: 0px 0px 10px rgba(50, 50, 50, 0.3);
            }
            
            .navbar {
                -webkit-box-shadow: 0px 0px 10px rgba(50, 50, 50, 1);
                -moz-box-shadow: 0px 0px 10px rgba(50, 50, 50, 1);
                box-shadow: 0px 0px 10px rgba(50, 50, 50, 1);
            }
        </style>
        <title>{{ Hethong::getValue('text_product') }}</title>
    </head>
    <body>
            @include ('guest.menu.index')
        <div class="overview">
            <div class="container">
            @include ('guest.header.index')
            </div>
        </div>
        <div id="main" class="container">
            @yield('main')
        </div>
        <div class="footer">
            <div style="border-top: 1px #fff solid">&copy; Bản quyền thuộc về Forexker Market 2014.</div>
        </div>

        <!-- Modal -->
        <div id="loader" class="panel panel-default">
            <h4>Đang thực thi...</h4>
            <div class="progress progress-striped active">
                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
            </div>
        </div>

        <div id="helper" class="alert alert-danger"></div>
    </body>
</html>
