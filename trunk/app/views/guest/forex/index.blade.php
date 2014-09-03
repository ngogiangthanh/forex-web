@foreach ($forex as $fr)
@if ($fr != null)
<div>
    @if(file_exists($fr->anhnho))
    {{ HTML::image($fr->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    <p>{{ $fr->tieude }}</p>
    <p>{{date("H:i:s d/m/Y",strtotime($fr->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $fr->luotxem}}</p>
    <p>[...Xem thêm]</p>
</div>
<hr>
@endif
@endforeach
<div id='forex_paging'>
   {{$forex->links()}} 
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>