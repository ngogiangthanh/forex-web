<?php
$url = new FunctionController();
?>
@foreach ($forex as $fr)
@if ($fr != null)
<?php
$urlReal = $url->getURL($fr->loai);
?>
<div>
    <a href="{{url($urlReal."/".$fr->id)}}">
        @if(file_exists($fr->anhnho))
        {{ HTML::image($fr->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p><a href="{{url($urlReal."/".$fr->id)}}">{{ $fr->tieude }}</a></p>
    <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($fr->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $fr->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$fr->id)}}">[...Xem thêm]</a></p>
</div>
<hr>
@endif
@endforeach
<div id='forex_paging'>
    {{$forex->links()}} 
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>