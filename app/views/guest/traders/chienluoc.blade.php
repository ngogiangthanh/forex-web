@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <!-- chiến lược forex -->
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">CHIẾN LƯỢC FOREX</div>
            <div class="panel-body" id='forex_index'>
                @include ('guest.chienluoc.forex.index')
            </div>
        </div>
    </div>
    <!-- chiến lược vàng -->
    <!-- show news -->
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">CHIẾN LƯỢC VÀNG</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <!--  -->
                    <div class="row">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#kimloaiquy" role="tab" data-toggle="tab">Kim loại quý</a></li>
                            <li><a href="#hanghoa" role="tab" data-toggle="tab">Hàng hóa</a></li>
                            <li><a href="#cophieu" role="tab" data-toggle="tab">Cổ phiếu</a></li>
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
@stop