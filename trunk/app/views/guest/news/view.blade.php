@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 20px">
    @if($news != null)
    <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-bookmark"></span>&nbsp;{{HTML::decode($news->tieude)}}</h3></div>
            <div class="panel-body" id="">
                <p><span class="glyphicon glyphicon-time"></span>&nbsp;{{date("h:i A | d/m/Y",strtotime($news->thoidiemdang))}}&nbsp;||&nbsp;<span class="glyphicon glyphicon-search"></span>&nbsp;{{ $news->luotxem}}</p>
                <hr/>
                {{HTML::decode($news->noidung)}}
                <hr/>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        @include('guest.relations.index_same')
    </div>
    <div class="col-md-4">
        @include('guest.relations.index_new')
    </div>
    <div class="col-md-4">
        @include('guest.relations.index_views')
    </div>
    @else
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Lỗi xảy ra</h3></div>
            <div class="panel-body" id="">
                <hr/>
                <h4>Rất đáng tiếc! Bài viết này không tồn tại hoặc đã bị xóa.</h4>
                <hr/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            @include('guest.relations.index_same')
        </div>
        <div class="col-md-4">
            @include('guest.relations.index_new')
        </div>
        <div class="col-md-4">
            @include('guest.relations.index_views')
        </div>
    </div>
    @endif
</div>
@stop