<style type="text/css">
    .table th, .table td {
        text-align: center;
        vertical-align: middle!important;
    }
    .table th:nth-child(1), 
    .table td:nth-child(1) {
        width: 7%;
    } 
    .table td:nth-child(2) {
        text-align: left;
        width: 30%;
    }
    .table th:nth-child(3), 
    .table td:nth-child(3) {
        width: 5%;
    }
    .table th:nth-child(4), 
    .table td:nth-child(4),
    .table th:nth-child(5), 
    .table td:nth-child(5) {
        width:19%;
    }
    .table th:nth-child(6), 
    .table td:nth-child(6) {
        width:10%;
    }
    .table th:nth-child(7), 
    .table td:nth-child(7) {
        width:10%;
    }
</style>
<div class="col-xs-12">
    <div class="form-group">
        <!-- Single button -->
        <div class="btn-group">
            <input id="search" name="search" type="text" class="form-control" placeholder="Nhập tiêu đề bài viết" style="width: 100%" value="{{isset($key) && $key != null ? $key : ""}}"/>
            <input type="hidden" name="urlsearch" id="urlsearch" value="{{url('admin/searchbaiviet')}}"/>
        </div>
        <span>
            <button class="btn btn-default" id="btnsearch" type="button" title="Tìm kiếm"><span class="glyphicon glyphicon-search"></span></button>
        </span>
        @if(isset($key) && $key != null)
        <span>
            <button class="btn btn-default" onclick="location.href='{{url('admin/ql=baiviet')}}'" id="btnreset" type="button" title="Reset"><span class="glyphicon glyphicon-remove"></span></button>
        </span>
        @endif
        <a href="" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i>&nbsp;Thêm bài viết</a><br/>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>URL</th>
                <th>Thời gian đăng</th>
                <th>Thời gian sửa</th>
                <th>Lượt xem</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
        <tbody> 
            <?php
            $url = new FunctionController();
            $count = $perpage * ($currentpage - 1);
            ?>
            @foreach($threads as $thread)
            @if ($thread != null)
            <?php
            $urlReal = $url->getURL($thread->loai);
            ?>
            <tr>
                <td>{{++$count}}</td>
                <td><b>{{HTML::decode($thread->tieude)}}</b></td>
                <td>
                    @if($url->isUnexpected($thread->loai))
                    <a href="{{url($urlReal."/threads=".$thread->id)}}" target="_blank">Link</a>
                    @else
                    <a href="{{url($urlReal."/".$thread->id)}}" target="_blank">Link</a>
                    @endif</td>
                <td>{{date("h:i A | d/m/Y",strtotime($thread->thoidiemdang))}}</td>
                <td>{{date("h:i A | d/m/Y",strtotime($thread->thoidiemsua))}}</td>
                <td>{{$thread->luotxem}}</td>
                <td><a href="" class="text-success"><i class="glyphicon glyphicon-edit" title="Sửa"></i></a>&nbsp;
                    <a href="#" class="text-danger" title="Xóa"><i class="glyphicon glyphicon-remove"></i></a>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        {{$threads->links()}}
    </div>	
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>