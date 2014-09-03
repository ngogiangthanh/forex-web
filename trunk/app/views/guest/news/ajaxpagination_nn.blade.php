@foreach ($noidung as $nn)
@if ($nn != null)
<div>  
    @if(file_exists($nn->anhnho))
    {{ HTML::image($nn->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @else
    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
    @endif
    <p>{{ $nn->tieude }}</p>
    <p>{{date("H:i:s d/m/Y",strtotime($nn->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $nn->luotxem}}</p>
    <p>[...Xem thêm]</p>
</div>
<hr>
@endif
@endforeach
<div id='tin_nn_paging'>
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