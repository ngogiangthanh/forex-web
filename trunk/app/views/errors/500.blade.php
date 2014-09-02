@extends('layouts.error')

@section('main')
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div class="pull-left" style="font-size: 100px; color: #f1f1f1; text-align: center;  margin:0 30px 0 25px">500</div>
                    <div class="media-body">
                      <h2 class="media-heading">Lỗi máy chủ</h2>
                      <p>Yêu cầu của bạn không thể được thực hiện.<br/>
                        Vui lòng kiểm tra dữ liệu nhập và thử lại lần nữa.</p>
                      <a class="btn btn-default" href="{{ url('/') }}">Quay lại trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop