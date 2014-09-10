@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 20px">
    <div class="row">
        <div class="panel panel-success">
            @if($news != null)
            <div class="panel-heading"><h3>{{HTML::decode($news->tieude)}}</h3></div>
            <div class="panel-body" id="">
                <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($news->thoidiemdang))}} || Lượt xem:&nbsp;{{ $news->luotxem}}</p>
                <hr/>
                {{HTML::decode($news->noidung)}}
                <hr/>
            </div>
            @else
            <div class="panel-heading"><h3>Lỗi</h3></div>
            <div class="panel-body" id="">
                <hr/>
                <h4>Bài viết không còn tồn tại hoặc đã bị xóa.</h4>
                <hr/>
            </div>
            @endif
        </div>
    </div>
</div>
@stop