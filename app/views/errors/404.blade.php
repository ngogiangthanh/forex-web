@extends('layouts.error')

@section('main')
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div class="pull-left" style="font-size: 100px; color: #f1f1f1; text-align: center;  margin:0 30px 0 25px">404</div>
                    <div class="media-body">
                      <h2 class="media-heading">Trang bạn tìm kiếm không tồn tại</h2>
                      <p>Trang bạn vừa tìm không tồn tại, có thể do bạn được dẫn đến từ một liên kết sai.<br/>
                        Hãy thử lại lần sau nếu bạn tin chắc rằng địa chỉ này là đúng.</p>
                      <a class="btn btn-default" href="{{ url('/') }}">Quay lại trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop