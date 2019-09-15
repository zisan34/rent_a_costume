@component('mail::message')



{!!$message['message']!!}
<br>
Thanks,<br>
{{env('APP_NAME')}}
@endcomponent
