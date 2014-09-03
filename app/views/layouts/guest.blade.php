<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{{ $title }}</title>
        <link rel="shortcut icon" href="{{ URL::to('favicon_img.ico') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/bootstrap-theme.min.css') }}
        {{ HTML::style('css/style.css') }}
        {{ HTML::style('css/nprogress.css') }}
        <style>
            body {
                margin-top: 50px;
                font-family: sans-serif !important;
                font-size: 15px
            }
            .navbar {
                -webkit-box-shadow: 0px 0px 10px rgba(50, 50, 50, 1);
                -moz-box-shadow: 0px 0px 10px rgba(50, 50, 50, 1);
                box-shadow: 0px 0px 10px rgba(50, 50, 50, 1);
            }
        </style>
    </head>
    <body>
        @include ('guest.menu.index')
        <div class="overview">
            <div class="container">
                @include ('guest.header.index')
            </div>
        </div>
        <div id="main" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 content-middle" style="background: #F0F0F0 ">
                        @yield('main')
                        <!-- all contact -->
                        @include('guest.footer.index')
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div style="border-top: 1px #fff solid;text-align: center;">&copy; Bản quyền thuộc về Forexker Market 2014.</div>
        </div>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        {{ HTML::script('js/jquery-1.10.2.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/bootstrap.notify.min.js') }}
        {{ HTML::script('js/nprogress.js') }}
        {{ HTML::script('js/jquery-ajax-pagination-1.0.js') }}
        {{ HTML::script('js/jquery-ajax-contact-1.0.js') }}
        <!--jqWidget-->
        <!--        {{ HTML::style('js/jqwidgets/styles/jqx.base.css') }}
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
                {{ HTML::script('js/import-export-data.js') }}-->
        <script type="text/javascript">
            $('body').show();
            NProgress.start();
            setTimeout(function() {
                NProgress.done();
                $('.fade').removeClass('out');
            }, 100);
//            $(document).ready(function()
//            {
//                $(".pagination a").click(function()
//                {
//                    var myurl = $(this).attr('href');
//                    $.ajax(
//                            {
//                                url: myurl,
//                                type: "get",
//                                datatype: "html"
////                              beforeSend: function()
////                              {
////                                  $('#ajax-loading').show();
////                              }
//                            }).done(function(data)
//                    {
//                        console.log(data);
//                        $("#forex_index").empty().html(data.html);
//                    })
//                            .fail(function(jqXHR, ajaxOptions, thrownError)
//                            {
//                                alert('No response from server');
//                            });
//                    return false;
//                });
//            });
        </script>
    </body>
</html>