<meta name="_token" content="{{ csrf_token() }}"/><div>
    <div class="title-email">
        Forexker Market luôn trân trọng ý kiến đóng góp cũng như những thắc mắc về giao dịch. 
        Xin hãy gửi thử cho chúng tôi qua email hoặc dùng mẫu sau:
    </div>
    <!-- form email-->
    <div class="email-demo" style="margin-top: 15px;">
        <form name="frmContact" id="frmContact" method="post" action="{{url('sendcontact')}}">
            <div class="col-md-12">
                <div class="col-md-3">
                    Họ và Tên:
                </div>
                <div class="col-md-9">
                    <input type="text" name="hotentxt" class="form-control" placeholder="Nhập họ và tên của bạn" width="50px" required=""/>
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 15px;">
                <div class="col-md-3">
                    Email: 
                </div>
                <div class="col-md-9">
                    <input type="email" name="emailtxt" class="form-control" placeholder="Nhập vào email của bạn" />
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 15px;">
                <div class="col-md-3">
                    Tiêu đề:
                </div>
                <div class="col-md-9">
                    <input type="text" name="tieudetxt" class="form-control" placeholder="Nhập tiêu đề ý kiến" required=""/>
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 15px;">
                <div class="col-md-3">
                    Nội dung: 
                </div>
                <div class="col-md-9">
                    <textarea rows="4" name="noidungtxt" cols="45" width="100%" placeholder="Nhập nội dung" required=""></textarea>
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 15px; margin-bottom: 15px;">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <button id="btn_send_contact" type="submit" class="btn btn-success">
                        Gửi
                    </button>
                    <button id="btn-send-contact" type="reset" class="btn btn-success">
                        Làm lại
                    </button>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </form>
    </div>
</div>