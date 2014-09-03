@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 20px">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">SẢN PHẨM GIAO DỊCH</div>
            <div class="panel-body" id="sp_gd_index">
                @foreach ($sp_gd as $gd)
                @if ($gd != null)
                <div>
                    @if(file_exists($gd->anhnho))
                    {{ HTML::image($gd->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
                    @else
                    {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
                    @endif
                    <p>{{ $gd->tieude }}</p>
                    <p>{{date("H:i:s d/m/Y",strtotime($gd->thoidiemsua))}}</p>
                    <p>Lượt xem:&nbsp;{{ $gd->luotxem}}</p>
                    <p>[...Xem thêm]</p>
                </div>
                <hr>
                @endif
                @endforeach
                <div id='sp_gd_paging'>
                    {{$sp_gd->links()}}
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