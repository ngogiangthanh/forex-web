@extends('layouts.admin')
@section('main')
{{ HTML::script('js/ckeditor/ckeditor.js'); }}
<div class="row">
            <div class="col-sm-3 col-xs-12 pull-left" id="sidebar" role="navigation">
               @include ('admin.menu.sidebar')
            </div>
            <div class="col-sm-9 col-xs-12 pull-right">
                <div class="row">
                    <!-- BEGIN CONTENT -->
                   <p style="margin-left: 50px; font-weight: bold">THÊM BÀI VIẾT</p>
                   <div class="row">
                        <div id="repData" class="col-md-11 form-horizontal">
                            <div class="form-group">
                                <label for="tieude_bv" class="col-sm-2 control-label">Tiêu đề &nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <input name="tieude_bv" class="form-control" placeholder="Tiêu đề cho nội dung bài viết" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="noidung_bv" class="col-sm-2 control-label">Nội dung</label>
                                <div class="col-sm-10">
                                  <textarea id="noidung_bv" name="noidung_bv" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                     <button class="btn btn-info" data-toggle="modal" data-target="#cfmWin">Đăng bài viết</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">

                        </div>
                    </div>
                    <!-- cfm Dangbaiviet -->
                    <div class="modal fade" id="cfmWin" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="width: 380px;">
                            <div class="modal-content modal-warning">
                                <div class="modal-body">
                                    <h4>Bạn muốn đăng bài viết này?</h4><br>
                                    <button class="btn btn-primary dangbaiOK" id="dangbaiOK">OK</button>
                                    <button class="btn btn-default" data-dismiss="modal">Không</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        CKEDITOR.replace('noidung_bv', {
                            height: 200,
                            toolbar: 'Full'
                        });
                        $("#dangbaiOK").click(function() {
                            $('#noidung_bv').val(CKEDITOR.instances.noidung_bv.getData());
                            var fdata = $('#repData').find("select,textarea,input").serialize();
                            $("#cfmWin").css('z-index', 1030);
                            $("#loader").fadeIn();
                            $.ajax({url: 'gopy', data: fdata, type: 'post',
                                success: function(data, textStatus, jqXHR) {
                                    $("#loader").fadeOut();
                                    $("#cfmWin").css('z-index', 1040).modal('hide');
                                        $.notify(data[1],data[0]);
                                        $.notify('Đăng bài viết thành công..',{autoHideDelay: 8000});
                                }, error: function(jqXHR, textStatus, errorThrown) {
                                    $("#log").html(jqXHR.responseText);
                                }
                            });
                        });
                    </script>
                    <!-- END CONTENT -->
                </div>
            </div><!--/span-->            
        </div>
<!--/row-->
@stop