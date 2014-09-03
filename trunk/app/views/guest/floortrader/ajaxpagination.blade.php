@foreach ($noidung as $san)
@if ($san != null)
<div>  
    @if(file_exists($san->anhnho))
    {{ HTML::image($fa->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    <p>{{ $san->tieude }}</p>
    <p>{{date("H:i:s d/m/Y",strtotime($san->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $san->luotxem}}</p>
    <p>[...Xem thêm]</p>
</div>
<hr>
@endif
@endforeach
<div id='sangd_paging'>
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