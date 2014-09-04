@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">SÀN GIAO DỊCH</div>
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
                        {{ HTML::image($san->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
                        @else
                        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
                        @endif
                    </a>
                    <p><a href="{{url($urlReal."/threads=".$san->id)}}">{{HTML::decode($san->tieude)}}</a></p>
                    <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($san->thoidiemsua))}}</p>
                    <p>Lượt xem:&nbsp;{{ $san->luotxem}}</p>
                    <p><a href="{{url($urlReal."/threads=".$san->id)}}">[...Xem thêm]</a></p>
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
</div>
@stop