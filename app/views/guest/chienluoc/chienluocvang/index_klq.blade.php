@foreach ($kimloaiquy as $klq)
@if ($klq != null)
<div>
    @if(file_exists($klq->anhnho))
    {{ HTML::image($klq->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    <p>{{ $klq->tieude }}</p>
    <p>{{date("H:i:s d/m/Y",strtotime($klq->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $klq->luotxem}}</p>
    <p>[...Xem thêm]</p>
</div>
<hr>
@endif
@endforeach
<div id='kimloaiquy_paging'>
{{$kimloaiquy->links()}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>