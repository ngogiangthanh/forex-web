@foreach ($TAs as $ta)
@if ($ta != null)
<div>
    @if(file_exists($ta->anhnho))
    {{ HTML::image($fa->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    <p>{{ $ta->tieude }}</p>
    <p>{{date("H:i:s d/m/Y",strtotime($ta->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $ta->luotxem}}</p>
    <p>[...Xem thêm]</p>
</div>
<hr>
@endif
@endforeach
<div id='ta_gold_paging'>
{{$TAs->links()}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>