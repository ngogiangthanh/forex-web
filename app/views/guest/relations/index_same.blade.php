<?php
$url = new FunctionController();
$count = 0;
?>
<div class="panel panel-success">
    <div class="panel-heading"><h3><span class="glyphicon glyphicon-book"></span>&nbsp;Các tin liên quan</h3></div>
    <div class="panel-body" id="cungchuyenmuc_index">
        @foreach($threads as $thread)
        @if ($thread != null)
        <?php
        $urlReal = $url->getURL($thread->loai);
        $count++;
        ?>
        <div>   @if($url->isUnexpected($thread->loai))
            <a href="{{url($urlReal."/threads=".$thread->id)}}" target="_blank"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;{{$thread->tieude}}</a>
            @else
            <a href="{{url($urlReal."/".$thread->id)}}" target="_blank"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;{{$thread->tieude}}</a>
            @endif
        </div>
        <hr>
        @endif
        @endforeach
        <div id='cungchuyenmuc_paging' style="text-align: center">
            {{$threads->links()}}
        </div>
        <style type='text/css'>
            .pagination
            {
                margin: 0px;
                margin-left: -20px;
            }
            .pagination li {
                display: inline;
                margin-left: 0.3em;
                margin-right: 0.3em;
            }
        </style>
        @if($count == 0)
        <div>  
            Không có bài viết liên quan nào.
        </div>
        <hr>
        @endif
    </div>
</div>