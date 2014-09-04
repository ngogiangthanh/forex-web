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
    {{ HTML::image($klq->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    </a>
    <p><a href="{{url($urlReal."/".$klq->id)}}">{{ HTML::decode($klq->tieude) }}</a></p>
    <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($klq->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $klq->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$klq->id)}}">[...Xem thêm]</a></p>
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