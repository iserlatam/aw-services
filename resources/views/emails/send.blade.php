@component('mail::message')
# AN USER HAS SENT YOU A NEW MESSAGE!
### Message received from your website contact form

<p>
    Sr. Miguel Rendon,
    <br>
    You have received the next message from your website:
</p>

<p><b>First Name:</b> : {{ $userInfo['first_name'] }}</p>
<p><b>Last Name:</b> : {{ $userInfo['last_name'] }}</p>
<p><b>Email:</b> {{ $userInfo['email'] }}</p>
<p><b>Country Code:</b> : {{ $userInfo['country_code'] }}</p>
<p><b>Phone Number:</b> : {{ $userInfo['phone_number'] }}</p>
<p><b>Service:</b> {{ $userInfo['service'] }}</p>
<p><b>Message:</b> {{ $userInfo['message'] }}</p>

@component('mail::button', ['url' => "https://wa.me/${userInfo['country_code']}${userInfo['phone_number']}", 'color' => 'success'])
Start a conversation now!
@endcomponent

Thanks,<br>
{{ config('app.name') }} - Powered by <a href="https://iserlatam.com">Iser Latam</a>
@endcomponent