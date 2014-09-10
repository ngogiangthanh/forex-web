@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-glass"></span>&nbsp;KIẾN THỨC GIAO DỊCH</h3></div>
            <div class="panel-body" id="kienthuc_index">
                <?php
                $url = new FunctionController();
                ?>
                @foreach ($kienthuc as $kt)
                @if ($kt != null)
                <?php
                $urlReal = $url->getURL($kt->loai);
                ?>
                <div>
                    <a href="{{url($urlReal."/threads=".$kt->id)}}">
                        @if(file_exists($kt->anhnho))
                        {{ HTML::image($kt->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
                        @else
                        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
                        @endif
                    </a>
                    <p><h4><a href="{{url($urlReal."/threads=".$kt->id)}}">{{HTML::decode($kt->tieude)}}</a></h4></p>
                    <p><span class="glyphicon glyphicon-time"></span>&nbsp;{{date("h:i A | d/m/Y",strtotime($kt->thoidiemdang))}}</p>
                    <p><span class="glyphicon glyphicon-search"></span>&nbsp;Lượt xem:&nbsp;{{ $kt->luotxem}}</p>
                    <p><a href="{{url($urlReal."/threads=".$kt->id)}}"><span class="glyphicon glyphicon-play"></span>&nbsp;Xem thêm</a></p>
                </div>
                <hr>
                @endif
                @endforeach
                <div id='kienthuc_paging'>
                    {{$kienthuc->links()}}
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