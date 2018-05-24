@component('mail::message')
# Welcome to Our Site

The body of your message.The body of your message.The body of your message.

@component('mail::button', ['url' => 'http://localhost/E_Commerce_Laravel_01/'])
Click For View Dashboard
@endcomponent

Thanks,<br/>
{{ config('app.name') }}
@endcomponent
