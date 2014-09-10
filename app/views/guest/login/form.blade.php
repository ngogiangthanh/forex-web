<!-- Login -->
<div class="col-md-12">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        @if (Session::has('flash_error'))
        <div class="alert alert-danger" style="padding: 10px;">{{ Session::get('flash_error') }}</div>
        @endif
        @if (Session::has('flash_notice'))
        <div class="alert alert-success" style="padding: 10px;">{{ Session::get('flash_notice') }}</div>
        @endif
        <hr/>
        <div class="panel panel-default" style="background-color: #fff; border-color: #c5c5c5;">
            <div class="panel-body" style="padding: 10px;">
                <img src="{{ url('img/icon_login.jpg') }}" class="img-responsive round-img" style="margin: 20px auto;" alt="login" />
                {{ Form::open(array('url'=>'login','method'=>'POST','class'=>'form-signin')) }}
                <div class='form-group'>
                {{ Form::text('username','',array('placeholder' => 'Tài khoản','class'=>'form-control')) }}
                </div>
                <div  class='form-group'>
                {{ Form::password('password',array('placeholder' => 'Mật khẩu','class'=>'form-control')) }}
                </div>
                <br/>
                </label>{{ Form::submit('Đăng nhập', array('class' => 'btn btn-lg btn-success btn-block')) }}
                </ul>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>