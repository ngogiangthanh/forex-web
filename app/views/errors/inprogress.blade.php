@extends('layouts.error')

@section('main')
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media-body">
                      <h2>Tính năng này đang được xây dựng</h2>
                      <p>Hiện nay, tính năng này đang được xây dựng. Xin vui lòng thử lại vào thời gian khác. Nhấn vào liên kết phía dưới để quay lại trang chủ.</p>
                      <div style="text-align: right"><a class="btn btn-default" href="{{ url('/') }}" >Quay lại trang chủ</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop