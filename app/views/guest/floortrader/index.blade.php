@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">SÀN GIAO DỊCH</div>
            <div class="panel-body" id='floortraders_index'>
                @foreach ($sangd as $san)
                @if ($san != null)
                <div>
                    @if(file_exists($san->anhnho))
                    {{ HTML::image($san->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
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
                    {{$sangd->links()}}
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