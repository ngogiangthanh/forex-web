<?php
$url = new FunctionController();
?>
@foreach ($noidung as $fr)
@if ($fr != null)
<?php
$urlReal = $url->getURL($fr->loai);
?>
<div>  
    <a href="{{url($urlReal."/".$fr->id)}}">
        @if(File::exists($fr->anhnho))
        {{ HTML::image($fr->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p>
        <a href="{{url($urlReal."/".$fr->id)}}">{{ $fr->tieude }}</a></p>
    <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($fr->thoidiemdang))}}</p>
    <p>Lượt xem:&nbsp;{{ $fr->luotxem}}</p>
    <p>
        <a href="{{url($urlReal."/".$fr->id)}}">[...Xem thêm]</a></p>
</div>
<hr>
@endif
@endforeach
<div id='forex_paging'>
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