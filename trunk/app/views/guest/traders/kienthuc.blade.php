@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 20px">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">KIẾN THỨC GIAO DỊCH</div>
            <div class="panel-body" id="kienthuc_index">
                @foreach ($kienthuc as $kt)
                @if ($kt != null)
                <div>
                    @if(file_exists($kt->anhnho))
                    {{ HTML::image($kt->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
                    @else
                    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
                    @endif
                    <p>{{ $kt->tieude }}</p>
                    <p>{{date("H:i:s d/m/Y",strtotime($kt->thoidiemsua))}}</p>
                    <p>Lượt xem:&nbsp;{{ $kt->luotxem}}</p>
                    <p>[...Xem thêm]</p>
                </div>
                <hr>
                @endif
                @endforeach
                <div id='kienthuc_paging'>
                    {{$kienthuc->links()}}
                </div>
                <style type='text/css'>
                    .pagination li {
                        display: inline;
                        margin-left: 0.5em;
                        margin-right: 0.5em;
                    }
                </style>
            </div>
        </div>
    </div>
</div>
@stop