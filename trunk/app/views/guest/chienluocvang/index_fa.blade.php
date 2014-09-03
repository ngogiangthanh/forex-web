@foreach ($FAs as $fa)
@if ($fa != null)
<div>
    @if(file_exists($fa->anhnho))
    {{ HTML::image($fa->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    <p>{{ $fa->tieude }}</p>
    <p>{{date("H:i:s d/m/Y",strtotime($fa->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $fa->luotxem}}</p>
    <p>[...Xem thêm]</p>
</div>
<hr>
@endif
@endforeach
<div id='fa_gold_paging'>
{{$FAs->links()}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>