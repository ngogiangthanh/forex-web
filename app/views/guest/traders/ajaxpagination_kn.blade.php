<?php
$url = new FunctionController();
?>
@foreach ($noidung as $kn)
@if ($kn != null)
<?php
$urlReal = $url->getURL($kn->loai);
?>
<div>
    <a href="{{url($urlReal."/threads=".$kn->id)}}">
        @if(file_exists($kn->anhnho))
        {{ HTML::image($kn->anhnho, '', array('class' => 'pull-left', 'style' =>'width:96px;margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p><h4><a href="{{url($urlReal."/threads=".$kn->id)}}">{{HTML::decode($kn->tieude)}}</a></h4></p>
    <p><span class="glyphicon glyphicon-time"></span>&nbsp;{{date("h:i A | d/m/Y",strtotime($kn->thoidiemdang))}}</p>
    <p><span class="glyphicon glyphicon-search"></span>&nbsp;Lượt xem:&nbsp;{{ $kn->luotxem}}</p>
    <p><a href="{{url($urlReal."/threads=".$kn->id)}}"><span class="glyphicon glyphicon-play"></span>&nbsp;Xem thêm</a></p>
</div>
<hr>
@endif
@endforeach
<div id='kinhnghiem_paging'>
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