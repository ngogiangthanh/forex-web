@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">KINH NGHIỆM GIAO DỊCH</div>
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
                    <p><a href="{{url($urlReal."/threads=".$kn->id)}}">{{HTML::decode($kn->tieude)}}</a></p>
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
</div>
</div>
@stop