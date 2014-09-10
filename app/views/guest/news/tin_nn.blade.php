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
    <p><h4><a href="{{url($urlReal."/".$nn->id)}}">{{HTML::decode($nn->tieude)}}</a></h4></p>
    <p><span class="glyphicon glyphicon-time"></span>&nbsp;{{date("h:i A | d/m/Y",strtotime($nn->thoidiemdang))}}</p>
    <p><span class="glyphicon glyphicon-search"></span>&nbsp;Lượt xem:&nbsp;{{ $nn->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$nn->id)}}"><span class="glyphicon glyphicon-play"></span>&nbsp;Xem thêm</a></p>
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