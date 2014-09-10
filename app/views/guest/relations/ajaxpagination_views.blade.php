<?php
$url = new FunctionController();
?>
@foreach($noidung as $thread)
@if ($thread != null)
<?php
$urlReal = $url->getURL($thread->loai);
?>
<div>   @if($url->isUnexpected($thread->loai))
    <a href="{{url($urlReal."/threads=".$thread->id)}}" target="_blank"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;{{$thread->tieude}}</a>
    @else
    <a href="{{url($urlReal."/".$thread->id)}}" target="_blank"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;{{$thread->tieude}}</a>
    @endif
</div>
<hr>
@endif
@endforeach
<div id='xemnhieu_paging' style="text-align: center">
    {{$phantrang}}
</div>
<style type='text/css'>
    .pagination
    {
        margin: 0px;
        margin-left: -20px;
    }
    .pagination li {
        display: inline;
        margin-left: 0.3em;
        margin-right: 0.3em;
    }
</style>
{{ HTML::script('js/jquery-ajax-pagination-1.0.js') }}