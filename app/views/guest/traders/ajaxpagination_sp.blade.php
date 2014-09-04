<?php
$url = new FunctionController();
?>
@foreach ($noidung as $sp)
@if ($sp != null)
<?php
$urlReal = $url->getURL($sp->loai);
?>
<div>  
    <a href="{{url($urlReal."/threads=".$sp->id)}}">
        @if(file_exists($sp->anhnho))
        {{ HTML::image($sp->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p><a href="{{url($urlReal."/threads=".$sp->id)}}">{{HTML::decode($sp->tieude)}}</a></p>
    <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($sp->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $sp->luotxem}}</p>
    <p><a href="{{url($urlReal."/threads=".$sp->id)}}">[...Xem thêm]</a></p>
</div>
<hr>
@endif
@endforeach
<div id='sp_gd_paging'>
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