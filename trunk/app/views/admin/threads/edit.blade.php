@extends('layouts.admin')
@section('main')
<div class="row">
    <div class="col-sm-3 col-xs-12 pull-left" id="sidebar" role="navigation">
        @include ('admin.menu.sidebar')
    </div>
    <div class="col-sm-9 col-xs-12 pull-right">
        <div class="row">
            <!-- BEGIN CONTENT -->
            @include('admin.threads.form_edit')
            <!-- END CONTENT -->
        </div>
    </div><!--/span-->            
</div>
<!--/row-->
@stop