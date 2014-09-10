<div class="col-md-12 footer-contact">
    <div style="margin-top: 20px; margin-bottom: 10px">
        <?php $i = 0; ?>
        @foreach ($contacts as $ct)
        @if ($ct != null)
        <?php $i++; ?>
        <div class="col-md-4 contact">
            @if ($i > 3)
            <hr>
            @endif
            <div class="name-contact" style="color:#0066ff;">
                <h4><span class="glyphicon glyphicon-phone"></span>&nbsp;{{$ct->address}}</h4> 
            </div>
            <div><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;+{{$ct->tel}}</div>
            <div><span class="glyphicon glyphicon-print"></span>&nbsp;+{{$ct->fax}}</div>
            <div><img src="{{asset('img/face-icon.png')}}" height="15px" alt="face"/>&nbsp;<a href="{{$ct->link}}" style="color: #0000FF">{{$ct->facebook}}</a></div>
            <div><span class="glyphicon glyphicon-envelope"></span>&nbsp;<a href="mailto:{{$ct->email}}" style="color: #FF0000 "> {{$ct->email}}</a></div>
        </div>  
        @endif
        @endforeach
    </div>
</div>