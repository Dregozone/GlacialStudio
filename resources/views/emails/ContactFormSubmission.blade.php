@component('mail::message')
# Contact form submission

<!-- A user has submit the contact form. --> 

## Name: 
{{ $request->name }}

## Email: 
{{ $request->email }}

## Reason for contact: 
{{ $request->reason }}

## Message: 
{{ $request->message }}

{{-- 
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
--}} 

@endcomponent
