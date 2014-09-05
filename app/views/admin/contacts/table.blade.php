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
            <input id="searchLH" name="searchLH" type="text" class="form-control" placeholder="Nhập email hoặc họ tên" style="width: 100%" value="{{isset($key) && $key != null ? $key : ""}}"/>
            <input type="hidden" name="urlsearchLH" id="urlsearchLH" value="{{url('admin/searchlienhe')}}"/>
            <input type="hidden" name="urlsearchCheckXL" id="urlsearchCheckXL" value="{{url('admin/qllienhe')}}"/>
        </div>
        <span>
            <button class="btn btn-default" id="btnsearchLH" type="button" title="Tìm kiếm"><span class="glyphicon glyphicon-search"></span></button>
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
            <?php
            $count = $perpage * ($currentpage - 1);
            ?>
            @foreach($lienhe as $lh)
            @if($lh != null)
            <tr>
                <td>{{++$count}}</td>
                <td>{{HTML::decode($lh->hoten)}}</td>
                <td><a href="mailto:{{$lh->email}}" style="color: #FF0000 "> {{$lh->email}}</a></td>
                <td>{{HTML::decode($lh->tieude)}}</td>
                <td>{{date("h:i A | d/m/Y",strtotime($lh->thoidiemgui))}}</td>
                <td id="time_{{$lh->id}}">
                @if($lh->thoidiemxuly == null)
                Chưa xử lý
                @else
                {{date("h:i A | d/m/Y",strtotime($lh->thoidiemxuly))}}
                @endif
                </td>
                <td>
                    <input type="checkbox" name="xuly" class="xulylh" value="{{$lh->id}}" id="xuly" <?=$lh->trangthai == 0 ? "" : "checked='checked'"?>/>
                </td>
                <td><a href="" class="text-success"><i class="glyphicon glyphicon-search" title="Xem"></i></a>&nbsp;
                    <a href="#" class="text-danger" title="Xóa"><i class="glyphicon glyphicon-remove"></i></a>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        {{$lienhe->links()}}
    </div>	
</div>