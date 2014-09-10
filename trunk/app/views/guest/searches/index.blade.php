@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading"><h3>Kết quả tìm kiếm của từ <b>{{$keysearch}}</b></h3></div>
            <div class="panel-body" id="result_search_index">
                <?php
                $url = new FunctionController();
                $count = 0;
                ?>
                @foreach ($result as $rs)
                @if ($rs != null)
                <?php
                $count++;
                   $urlReal = $url->getURL($rs->loai);
                ?>
                <div>
                    @if($url->isUnexpected($rs->loai))
                    <a href="{{url($urlReal."/threads=".$rs->id)}}" target="_blank"><span class="glyphicon glyphicon-search"></span>&nbsp;{{$rs->tieude}}</a>
                    @else
                    <a href="{{url($urlReal."/".$rs->id)}}" target="_blank"><span class="glyphicon glyphicon-search"></span>&nbsp;{{$rs->tieude}}</a>
                    @endif
                </div>
                <hr>
                @endif
                @endforeach
                @if($count == 0)
                Không tìm thấy kết quả nào phù hợp.
                @endif
                <div id='result_search_paging'>
                    {{$result->links()}}
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