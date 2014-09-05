<style type="text/css">
    .table th, .table td {
        text-align: center;
        vertical-align: middle!important;
    }
    .table th:nth-child(1), 
    .table td:nth-child(1) {
        width: 9%;
    } 
    .table td:nth-child(2),
    .table th:nth-child(2),
    .table th:nth-child(3), 
    .table td:nth-child(3),
    .table th:nth-child(4), 
    .table td:nth-child(4),
    .table th:nth-child(5), 
    .table td:nth-child(5),
    .table th:nth-child(6), 
    .table td:nth-child(6),
    .table th:nth-child(7), 
    .table td:nth-child(7) 
    .table th:nth-child(8), 
    .table td:nth-child(8){
        width:13%;
    }
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>
<div class="col-xs-12">
    <div class="form-group">
        <!-- Single button -->
        <div class="btn-group">
            <input id="search" name="search" type="text" class="form-control" placeholder="Nhập email hoặc họ tên" style="width: 100%" value="{{isset($key) && $key != null ? $key : ""}}"/>
            <input type="hidden" name="urlsearch" id="urlsearch" value="{{url('admin/searchlienhe')}}"/>
        </div>
        <span>
            <button class="btn btn-default" id="btnsearch" type="button" title="Tìm kiếm"><span class="glyphicon glyphicon-search"></span></button>
        </span>
        @if(isset($key) && $key != null)
        <span>
            <button class="btn btn-default" onclick="location.href ='{{url('admin/ql=lienhe')}}'" id="btnreset" type="button" title="Reset"><span class="glyphicon glyphicon-remove"></span></button>
        </span>
        @endif
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên người gửi</th>
                <th>Email</th>
                <th>Tiêu đề</th>
                <th>Thời gian gửi</th>
                <th>Thời gian xử lý</th>
                <th>Trạng thái</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody> 

        </tbody>
    </table>
    <div class="text-right">
    </div>	
</div>