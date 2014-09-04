@foreach ($hanghoa as $hh)
@if ($hh != null)
<div>
    @if(file_exists($hh->anhnho))
    {{ HTML::image($hh->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    <p>{{ $hh->tieude }}</p>
    <p>{{date("H:i:s d/m/Y",strtotime($hh->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $hh->luotxem}}</p>
    <p>[...Xem thêm]</p>
</div>
<hr>
@endif
@endforeach
<div id='hanghoa_paging'>
    {{$hanghoa->links()}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>