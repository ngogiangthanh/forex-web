<?php
$url = new FunctionController();
?>
@foreach ($noidung as $tn)
@if ($tn != null)
<?php
$urlReal = $url->getURL($tn->loai);
?>
<div>  
    <a href="{{url($urlReal."/".$tn->id)}}">
    @if(file_exists($tn->anhnho))
    {{ HTML::image($tn->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    </a>
    <p><h4><a href="{{url($urlReal."/".$tn->id)}}">{{HTML::decode($tn->tieude)}}</a></h4></p>
    <p><span class="glyphicon glyphicon-time"></span>&nbsp;{{date("h:i A | d/m/Y",strtotime($tn->thoidiemdang))}}</p>
    <p><span class="glyphicon glyphicon-search"></span>&nbsp;Lượt xem:&nbsp;{{ $tn->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$tn->id)}}"><span class="glyphicon glyphicon-play"></span>&nbsp;Xem thêm</a></p>
</div>
<hr>
@endif
@endforeach
<div id='tin_tn_paging'>
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