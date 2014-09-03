@if ($result)
<p>Ý kiến của bạn đã được gửi đi. Chúng tôi sẽ xem xét và phản hồi trong thời gian tới!.<br/>
    Cảm ơn bạn!
</p>
@else
<p>
    Xin lỗi! Ý kiến chưa được gửi đi.
</p>
@endif
&nbsp;<a href="{{url('contact')}}">Nhấp vào đây để quay lại</a>