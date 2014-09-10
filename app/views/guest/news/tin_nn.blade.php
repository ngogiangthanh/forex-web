<?php
$url = new FunctionController();
?>
@foreach ($newsNNs as $nn)
@if ($nn != null)
<?php
$urlReal = $url->getURL($nn->loai);
?>
<div>
    <a href="{{url($urlReal."/".$nn->id)}}">
        @if(file_exists($nn->anhnho))
        {{ HTML::image($nn->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p><a href="{{url($urlReal."/".$nn->id)}}">{{HTML::decode($nn->tieude)}}</a></p>
    <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($nn->thoidiemdang))}}</p>
    <p>Lượt xem:&nbsp;{{ $nn->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$nn->id)}}">[...Xem thêm]</a></p>
</div>
<hr>
@endif
@endforeach
<div id='tin_nn_paging'>
    {{$newsNNs->links()}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>