@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 20px">
    <div class="row">
        <div class="panel panel-success">
            @if($news != null)
            <div class="panel-heading"><h1>{{HTML::decode($news->tieude)}}</h1></div>
            <div class="panel-body" id="">
                <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($news->thoidiemdang))}} || Lượt xem:&nbsp;{{ $news->luotxem}}</p>
                <hr/>
                {{HTML::decode($news->noidung)}}
                <hr/>
            </div>
            @else
            <div class="panel-heading">Lỗi</div>
            <div class="panel-body" id="">
                <hr/>
                Bài viết không còn tồn tại hoặc đã bị xóa.
                <hr/>
            </div>
            @endif
        </div>
    </div>
</div>
@stop