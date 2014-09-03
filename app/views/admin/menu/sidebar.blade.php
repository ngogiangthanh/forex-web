<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <a href="{{ url('admin') }}"><i class="glyphicon glyphicon-th-large"></i>&nbsp;Quản lý</a>
            <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
        </h3>
    </div>
    <div class="list-group hidden-xs">
        <a href="{{ url('/') }}" class="list-group-item"><i class="glyphicon glyphicon-th-list"></i>&nbsp;Trang chủ</a>
        <a href="{{ url('admin/qltintuc') }}" class="list-group-item"><i class="glyphicon glyphicon-book"></i>&nbsp;Quản lý tin tức</a>
        <a href="{{ url('admin/qlgiaodich') }}" class="list-group-item"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;Quản lý giao dịch</a>
        <a href="{{ url('admin/qlsangiaodich') }}" class="list-group-item"><i class="glyphicon glyphicon-gift"></i>&nbsp;Quản lý sàn giao dịch</a>
        <a href="{{ url('admin/qllienhe') }}" class="list-group-item"><i class="glyphicon glyphicon-gift"></i>&nbsp;Quản lý liên hệ</a>
        <a href="{{ url('admin/qllienlac') }}" class="list-group-item"><i class="glyphicon glyphicon-phone"></i>&nbsp;Quản lý liên lạc</a>
    </div>
</div>