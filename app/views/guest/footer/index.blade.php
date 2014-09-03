<div class="col-md-12 footer-contact">
    <div style="margin-top: 20px; margin-bottom: 10px">
        <?php $i = 0; ?>
        @foreach ($contacts as $ct)
        @if ($ct != null)
        <?php $i++; ?>
        <div class="col-md-4 contact">
            @if ($i > 3)
            <br/>
            @endif
            <div class="name-contact" style="color:#0066ff;font-weight: bold">
                {{$ct->address}}
            </div>
            <br/>
            <div>Tel: +{{$ct->tel}}</div>
            <div>Fax: +{{$ct->fax}}</div>
            <div>Facebook: <a href="https://www.facebook.com/syluong282" style="color: #0000FF">{{$ct->facebook}}</a></div>
            <div>Email:<a href="mailto:forextrader@gmail.com" style="color: #FF0000 "> {{$ct->email}}</a></div>
        </div>  
        @endif
        @endforeach
    </div>
</div>