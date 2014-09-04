@foreach ($cophieu as $cp)
@if ($cp != null)
<div>
    @if(file_exists($cp->anhnho))
    {{ HTML::image($cp->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    <p>{{ $cp->tieude }}</p>
    <p>{{date("H:i:s d/m/Y",strtotime($cp->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $cp->luotxem}}</p>
    <p>[...Xem thêm]</p>
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