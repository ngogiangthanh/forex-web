@extends('layouts.guest')
@section('main')       
<div class="col-md-12">
    <div class="col-md-9">
        <!--Table economic-->
        <div class="col-md-12" style="padding: 5px">
            <iframe src="http://ec.forexprostools.com?ecoDayBackground=%23ccffff&defaultFont=%232c2640&borderColor=%23660000&ecoDayFontColor=%23000099&columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&category=_employment,_economicActivity,_inflation,_credit,_centralBanks,_confidenceIndex,_balance,_Bonds&importance=1,2,3&features=datepicker,timezone&countries=25,32,6,37,72,22,17,39,14,48,10,35,7,43,60,36,110,11,26,12,4,5&calType=day&timeZone=8&lang=1" 
                    width="100%" height="400" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0">
            </iframe>
            <!--                        
            <div class="poweredBy">
                                    <span style="font-size: 11px;color: #333333;text-decoration: none;">
                                        Real Time Economic Calendar provided by 
                                        <a href="http://www.Investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">
                                            Investing.com
                                        </a>.
                                    </span>
                                </div>
            -->
        </div>
        <!--Tầm nhìn thế giới-->
        <div class="col-md-12" style="margin-top: 15px;">
            <!--  -->
            <div class="row">
                <div class="col-md-12 panel panel-primary">
                    <h3><span class="glyphicon glyphicon-star-empty"></span>&nbsp;{{$chienLuoc->tieude}}</h3>
                    <p>{{$chienLuoc->noidung}}</p>
                </div>
            </div>
        </div>
        <!--Chiến lược forex-->
        <div class="col-md-12" style="margin-top: 15px;">
            <!--  -->
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3><span class="glyphicon glyphicon-star"></span>&nbsp;CHIẾN LƯỢC FOREX</h3></div>
                    <div class="panel-body" id="forex_index">
                        @include ('guest.chienluoc.forex.index')
                    </div>
                </div>
            </div>
        </div>
        <!--Chiến lược vàng-->
        <div class="col-md-12" style="margin-top: 15px">
            <!-- show news -->
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3><span class="glyphicon glyphicon-star"></span>&nbsp;CHIẾN LƯỢC VÀNG</h3></div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <!--  -->
                            <div class="row">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#kimloaiquy" role="tab" data-toggle="tab"><h4>Kim loại quý</h4></a></li>
                                    <li><a href="#hanghoa" role="tab" data-toggle="tab"><h4>Hàng hóa</h4></a></li>
                                    <li><a href="#cophieu" role="tab" data-toggle="tab"><h4>Cổ phiếu</h4></a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content" style="padding: 5px">
                                    <div class="tab-pane active" id="kimloaiquy">
                                        <div id="kimloaiquy_content">
                                            @include ('guest.chienluoc.chienluocvang.index_klq')
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="hanghoa">
                                        <div id="hanghoa_content">
                                            @include ('guest.chienluoc.chienluocvang.index_hh')
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="cophieu">
                                        <div id="cophieu_content">
                                            @include ('guest.chienluoc.chienluocvang.index_cp')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12"  style="margin-top:15px;">
            <a class="btn btn-primary btn-function" href="https://www.ironfx.com/vi/register?utm_source=16014148&utm_medium=ib_link&utm_campaign=IB" 
               title="Mở tài khoản thật" target="_blank"><span class="glyphicon glyphicon-user"></span>&nbsp;Mở tài khoản thật</a>
        </div> 
        <div class="col-md-12"  style="margin-top: 15px">
            <a class="btn btn-success btn-function" href="https://www.ironfx.com/vi/demo?utm_source=002426&utm_medium=link&utm_campaign=IronFX_Sales" 
               title="Mở tài khoản Demo" target="_blank"><span class="glyphicon glyphicon-user"></span>&nbsp;Mở tài khoản Demo</a>
        </div>
        <div class="col-md-12"  style="margin-top: 15px">
            <a class="btn btn-warning btn-function" href="http://www.ironfx.com/en/trading-platform/mt4-trader-advanced" 
               title="Tải phần mềm MT4" target="_blank"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;Tải phần mềm MT4</a>
        </div>
        <!-- find us on facebook -->
        <div class="col-md-12" style="margin-top: 25px">
            <div class="facebook">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2Fforexmarketcomvn%2F695512290504029&amp;width=200&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:290px;" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>
    <div class="col-md-3" style="margin-top:15px;">
        @include('guest.relations.index_new')
    </div>
</div>    
@stop