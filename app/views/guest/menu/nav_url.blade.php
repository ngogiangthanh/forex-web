<?php
$urlBar = new FunctionController();
$url = Request::path();
?>
@if($urlBar->isURL($url))
<div class="col-md-12 news" style="margin-top: 10px;margin-bottom: -20px">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
               <span class="glyphicon glyphicon-home"></span>&nbsp;{{$urlBar->getNAVName($url)}}
            </div>
        </div>
    </div>
</div>
@endif
