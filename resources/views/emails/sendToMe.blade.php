@component('mail::message')

# User Enquiry Details
@component('mail::panel')
    <span>First Name:&nbsp;{{$fname}}</span><br/>

<span>Last Name:&nbsp;{{$lname}}</span>
<span>Email:&nbsp;{{$email}}</span>
<span>Project Name:&nbsp;{{$pname}}</span>
<span>Project Description:&nbsp;{{$body}}</span>
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
