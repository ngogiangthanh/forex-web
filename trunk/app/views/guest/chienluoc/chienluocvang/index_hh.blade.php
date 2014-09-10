<?php
$url = new FunctionController();
?>
@foreach ($hanghoa as $hh)
@if ($hh != null)
<?php
$urlReal = $url->getURL($hh->loai);
?>
<div>
    <a href="{{url($urlReal."/".$hh->id)}}">
        @if(file_exists($hh->anhnho))
        {{ HTML::image($hh->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p><h4><a href="{{url($urlReal."/".$hh->id)}}">{{ HTML::decode($hh->tieude)}}</a></h4></p>
    <p><span class="glyphicon glyphicon-time"></span>&nbsp;{{date("h:i A | d/m/Y",strtotime($hh->thoidiemdang))}}</p>
    <p><span class="glyphicon glyphicon-search"></span>&nbsp;Lượt xem:&nbsp;{{ $hh->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$hh->id)}}"><span class="glyphicon glyphicon-play"></span>&nbsp;Xem thêm</a></p>
</div>
<hr>
@endif
@endforeach
<div id='hanghoa_paging'>
    {{$hanghoa->links()}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>