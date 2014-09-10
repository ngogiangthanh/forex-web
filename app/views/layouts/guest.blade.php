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
        {{ HTML::style('css/toastr.css') }}
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
            #bttop{border:1px solid #4adcff;background:#24bde2;text-align:center;padding:5px;position:fixed;bottom:35px;right:10px;cursor:pointer;display:none;color:#fff;font-size:11px;font-weight:900;}
            #bttop:hover{border:1px solid #ffa789;background:#ff6734;}
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
                        <div id="web_content_id">
                            @include ('guest.menu.nav_url')
                            @yield('main')
                        </div>
                        <!-- all contact -->
                        @include('guest.footer.index')
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div style="border-top: 1px #fff solid;text-align: center;">&copy; Bản quyền thuộc về Forexker Market 2014, phát triển bởi nhóm <a href="https://www.facebook.com/ngogiangthanhblog" target="_blank"><b>TT</b></a></div>
        </div>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        {{ HTML::script('js/jquery-1.10.2.min.js') }}
        {{ HTML::script('js/toastr.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/bootstrap.notify.min.js') }}
        {{ HTML::script('js/nprogress.js') }}
        {{ HTML::script('js/jquery-ajax-pagination-1.0.js') }}
        {{ HTML::script('js/jquery-ajax-contact-1.0.js') }}
        {{ HTML::script('js/jquery-ajax-search-1.0.js') }}

        <div id='bttop'>BACK TO TOP</div>
        <script type="text/javascript">
            toastr.options.closeButton = true;
            toastr.options.newestOnTop = true;
            $('body').show();
            NProgress.start();
            setTimeout(function() {
                NProgress.done();
                $('.fade').removeClass('out');
            }, 100);
            $(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() != 0) {
                        $('#bttop').fadeIn();
                    } else {
                        $('#bttop').fadeOut();
                    }
                });
                $('#bttop').click(function() {
                    $('body,html').animate({scrollTop: 0}, 800);
                });
            });
        </script>
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_preferred_1"></a>
            <a class="addthis_button_preferred_2"></a>
            <a class="addthis_button_preferred_3"></a>
            <a class="addthis_button_preferred_4"></a>
            <a class="addthis_button_compact"></a>
            <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51d69943280ea9a5"></script>
        <!-- AddThis Button END -->
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:0px;bottom:50px;">
            <a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
            <a class="addthis_button_tweet" tw:count="vertical"></a>
            <a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
            <a class="addthis_counter"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51d69943280ea9a5"></script>
        <!-- AddThis Button END -->
    </body>
</html>