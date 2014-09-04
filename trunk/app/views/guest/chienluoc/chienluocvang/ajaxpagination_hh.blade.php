<?php
$url = new FunctionController();
?>
@foreach ($noidung as $hh)
@if ($hh != null)
<?php
$urlReal = $url->getURL($hh->loai);
?>
<div>  
    <a href="{{url($urlReal."/".$hh->id)}}">
        @if(file_exists($hh->anhnho))
        {{ HTML::image($hh->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p><a href="{{url($urlReal."/".$hh->id)}}">{{HTML::decode($hh->tieude)}}</a></p>
    <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($hh->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $hh->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$hh->id)}}">[...Xem thêm]</a></p>
</div>
<hr>
@endif
@endforeach
<div id='hanghoa_paging'>
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