@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-flag"></span>&nbsp;Sàn Giao Dịch</h3></div>
            <div class="panel-body" id='floortraders_index'>
                <?php
                $url = new FunctionController();
                ?>
                @foreach ($sangd as $san)
                @if ($san != null)
                <?php
                $urlReal = $url->getURL($san->loai);
                ?>
                <div>
                    <a href="{{url($urlReal."/threads=".$san->id)}}">
                        @if(file_exists($san->anhnho))
                        {{ HTML::image($san->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
                        @else
                        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
                        @endif
                    </a>
                    <p><h4><a href="{{url($urlReal."/threads=".$san->id)}}">{{HTML::decode($san->tieude)}}</a></h4></p>
                    <p><span class="glyphicon glyphicon-time"></span>&nbsp;{{date("h:i A | d/m/Y",strtotime($san->thoidiemdang))}}</p>
                    <p><span class="glyphicon glyphicon-search"></span>&nbsp;Lượt xem:&nbsp;{{ $san->luotxem}}</p>
                    <p><a href="{{url($urlReal."/threads=".$san->id)}}"><span class="glyphicon glyphicon-play"></span>&nbsp;Xem thêm</a></p>
                </div>
                <hr>
                @endif
                @endforeach
                <div id='sangd_paging'>
                    {{$sangd->links()}}
                </div>
                <style type='text/css'>
                    .pagination li {
                        display: inline;
                        margin-left: 0.5em;
                        margin-right: 0.5em;
                    }
                </style>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        @include('guest.relations.index_views')
    </div>
</div>
@stop