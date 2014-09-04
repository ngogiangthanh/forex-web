@if(Request::path() != '/')
<div class="col-md-12 news" style="margin-top: 10px;margin-bottom: -20px">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
               <span class="glyphicon glyphicon-home"></span>&nbsp;{{FunctionController::getNAVName(Request::path());}}
            </div>
        </div>
    </div>
</div>
@endif
