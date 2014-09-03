@foreach ($noidung as $tn)
@if ($tn != null)
<div>  
    @if(file_exists($tn->anhnho))
    {{ HTML::image($tn->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    <p>{{ $tn->tieude }}</p>
    <p>{{date("H:i:s d/m/Y",strtotime($tn->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $tn->luotxem}}</p>
    <p>[...Xem thêm]</p>
</div>
<hr>
@endif
@endforeach
<div id='tin_tn_paging'>
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