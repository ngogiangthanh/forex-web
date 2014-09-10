<?php
$url = new FunctionController();
?>
@foreach ($kimloaiquy as $klq)
@if ($klq != null)
<?php
$urlReal = $url->getURL($klq->loai);
?>
<div>
    <a href="{{url($urlReal."/".$klq->id)}}">
    @if(file_exists($klq->anhnho))
    {{ HTML::image($klq->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    </a>
    <p><h4><a href="{{url($urlReal."/".$klq->id)}}">{{ HTML::decode($klq->tieude) }}</a></h4></p>
    <p><span class="glyphicon glyphicon-time"></span>&nbsp;{{date("h:i A | d/m/Y",strtotime($klq->thoidiemdang))}}</p>
    <p><span class="glyphicon glyphicon-search"></span>&nbsp;Lượt xem:&nbsp;{{ $klq->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$klq->id)}}"><span class="glyphicon glyphicon-play"></span>&nbsp;Xem thêm</a></p>
</div>
<hr>
@endif
@endforeach
<div id='kimloaiquy_paging'>
    {{$kimloaiquy->links()}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>