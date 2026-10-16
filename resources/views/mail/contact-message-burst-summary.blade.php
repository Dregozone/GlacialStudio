<x-mail::message>
# Contact messages are arriving in a burst

More than {{ $individualEmailLimit }} contact messages have arrived within {{ $windowMinutes }} minutes.

Emails for new messages are paused until {{ $pausedUntil->format('H:i T') }}. Every message is still saved, so you can read them all on the admin messages page.
</x-mail::message>
