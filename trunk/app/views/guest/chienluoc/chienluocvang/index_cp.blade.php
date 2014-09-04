<?php
$url = new FunctionController();
?>
@foreach ($cophieu as $cp)
@if ($cp != null)
<?php
$urlReal = $url->getURL($cp->loai);
?>
<div>
    <a href="{{url($urlReal."/".$cp->id)}}">
        @if(file_exists($cp->anhnho))
        {{ HTML::image($cp->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p><a href="{{url($urlReal."/".$cp->id)}}">{{HTML::decode($cp->tieude)}}</a></p>
    <p>Ngày đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($cp->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $cp->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$cp->id)}}">[...Xem thêm]</a></p>
</div>
<hr>
@endif
@endforeach
<div id='cophieu_paging'>
    {{$cophieu->links()}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>