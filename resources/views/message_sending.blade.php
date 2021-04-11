@component('mail::message')
# Mensaje de {{$email->user->name}}
<br/>
<b>Asunto:</b>&nbsp;{{$email->subject}}<br/>
{{$body}}
<br/>
<br/>
<br/>

Saludos,<br>
{{ config('app.name') }}
@endcomponent
