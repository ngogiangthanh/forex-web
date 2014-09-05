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
        <a href="" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i>&nbsp;Thêm liên lạc</a><br/><br/>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên bộ phận</th>
                <th>Số điện thoại</th>
                <th>Số fax</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Vị trí</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody> 
            <?php
            $count = 0;
            ?>
            @foreach ($lienlac as $lc)
            @if($lc != null)
            <?php
            $count++;
            ?>
            <tr id="row_{{$lc->id}}">
                <td>{{$count}}</td>
                <td><b>{{HTML::decode($lc->address)}}</b></td>
                <td>{{$lc->tel}}</td>
                <td>{{$lc->fax}}</td>
                <td><a href="mailto:{{$lc->email}}" style="color: #FF0000 "> {{$lc->email}}</a></td>
                <td><a href='{{$lc->link}}'>{{$lc->facebook}}</a></td>
                <td>
                    @if($lc->vitri == 0)
                    Footer
                    @else
                    Liên hệ
                    @endif
                </td>
                <td>
                    <a href="{{url('admin/delete=lienlac')}}" name="" id="{{$lc->id}}" class="delete_ll text-danger" title="Xóa"><i class="glyphicon glyphicon-remove"></i></a>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>	
</div>