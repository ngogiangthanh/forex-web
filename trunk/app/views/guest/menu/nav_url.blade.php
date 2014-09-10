<?php
$urlBar = new FunctionController();
$url = explode("=", Request::path());
?>
@if($urlBar->isURL($url[0]))
<div class="col-md-12 news" style="margin-top: 10px;margin-bottom: -20px">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><span class="glyphicon glyphicon-home"></span>&nbsp;{{$urlBar->getNAVName($url[0])}}</h4>
            </div>
        </div>
    </div>
</div>
@endif
