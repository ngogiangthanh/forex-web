<?php
$url = new FunctionController();
?>
@foreach ($newsTNs as $tn)
@if ($tn != null)
<?php
$urlReal = $url->getURL($tn->loai);
?>
<div>
    <a href="{{url($urlReal."/".$tn->id)}}">
        @if(file_exists($tn->anhnho))
        {{ HTML::image($tn->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p><a href="{{url($urlReal."/".$tn->id)}}">{{HTML::decode($tn->tieude)}}</a></p>
    <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($tn->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $tn->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$tn->id)}}">[...Xem thêm]</a></p>
</div>
<hr>
@endif
@endforeach
<div id='tin_tn_paging'>
    {{$newsTNs->links()}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>