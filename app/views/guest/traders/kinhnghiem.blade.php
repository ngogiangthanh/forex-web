@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-screenshot"></span>&nbsp;KINH NGHIỆM GIAO DỊCH</h3></div>
            <div class="panel-body" id="kinhnghiem_content">
                <?php
                $url = new FunctionController();
                ?>
                @foreach ($kinhnghiem as $kn)
                @if ($kn != null)
                <?php
                $urlReal = $url->getURL($kn->loai);
                ?>
                <div>
                    <a href="{{url($urlReal."/threads=".$kn->id)}}">
                        @if(file_exists($kn->anhnho))
                        {{ HTML::image($kn->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
                        @else
                        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
                        @endif
                    </a>
                    <p><h4><a href="{{url($urlReal."/threads=".$kn->id)}}">{{HTML::decode($kn->tieude)}}</a></h4></p>
                    <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($kn->thoidiemdang))}}</p>
                    <p>Lượt xem:&nbsp;{{ $kn->luotxem}}</p>
                    <p><a href="{{url($urlReal."/threads=".$kn->id)}}">[...Xem thêm]</a></p>
                </div>
                <hr>
                @endif
                @endforeach
                <div id='kinhnghiem_paging'>
                    {{$kinhnghiem->links()}}
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