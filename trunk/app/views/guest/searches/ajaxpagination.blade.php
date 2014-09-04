<?php
$url = new FunctionController();
$count = 0;
?>
@foreach ($noidung as $rs)
@if ($rs != null)
<?php
$count++;
$urlReal = $url->getURL($rs->loai);
?>
<div>
    @if($url->isUnexpected($rs->loai))
    <a href="{{url($urlReal."/threads=".$rs->id)}}" target="_blank">{{$rs->tieude}}</a>
    @else
    <a href="{{url($urlReal."/".$rs->id)}}" target="_blank">{{$rs->tieude}}</a>
    @endif
</div>
<hr>
@endif
@endforeach
@if($count == 0)
Không tìm thấy kết quả nào phù hợp.
@endif
<div id='result_search_paging'>
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