<x-mail::message>
# New contact message

**Name:** {{ $contactMessage->name }}<br>
**Email:** {{ $contactMessage->email }}<br>
**Received:** {{ $contactMessage->created_at->format('j M Y, H:i T') }}

<x-mail::panel>
{{ $contactMessage->message }}
</x-mail::panel>

Reply to this email to answer {{ $contactMessage->name }} directly.
</x-mail::message>
