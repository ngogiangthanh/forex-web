<?php
$url = new FunctionController();
?>
@foreach ($noidung as $san)
@if ($san != null) <?php
$urlReal = $url->getURL($san->loai);
?>
<div>  
    <a href="{{url($urlReal."/threads=".$san->id)}}">
        @if(file_exists($san->anhnho))
        {{ HTML::image($fa->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
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
    {{$phantrang}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>
{{ HTML::script('js/jquery-ajax-pagination-1.0.js') }}