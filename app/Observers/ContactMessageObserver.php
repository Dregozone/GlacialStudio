<?php

namespace App\Observers;

use App\Mail\ContactMessageBurstSummary;
use App\Mail\NewContactMessage;
use App\Models\BannedIpAddress;
use App\Models\ContactMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactMessageObserver
{
    public const INDIVIDUAL_EMAIL_LIMIT = 5;

    public const BURST_WINDOW_MINUTES = 10;

    /**
     * Email the admin about a new contact message once the response has been sent.
     */
    public function created(ContactMessage $contactMessage): void
    {
        $recipient = config('services.admin_notify.email');

        if (blank($recipient)) {
            return;
        }

        $senderIpAddress = request()->ip();

        defer(function () use ($contactMessage, $recipient, $senderIpAddress): void {
            try {
                $this->notifyAdmin($contactMessage, $recipient, $senderIpAddress);
            } catch (Throwable $exception) {
                Log::error('Failed to send the new contact message email.', [
                    'contact_message_id' => $contactMessage->id,
                    'exception' => $exception,
                ]);
            }
        });
    }

    private function notifyAdmin(ContactMessage $contactMessage, string $recipient, ?string $senderIpAddress): void
    {
        if ($senderIpAddress !== null && BannedIpAddress::query()->where('ip_address', $senderIpAddress)->exists()) {
            return;
        }

        $windowLengthSeconds = self::BURST_WINDOW_MINUTES * 60;
        $windowStart = intdiv(now()->timestamp, $windowLengthSeconds) * $windowLengthSeconds;
        $windowEnd = Carbon::createFromTimestamp($windowStart + $windowLengthSeconds);
        $counterKey = "contact_messages:notified:{$windowStart}";

        Cache::add($counterKey, 0, $windowEnd);
        $messagesInWindow = (int) Cache::increment($counterKey);

        if ($messagesInWindow <= self::INDIVIDUAL_EMAIL_LIMIT) {
            Mail::to($recipient)->send(new NewContactMessage($contactMessage));

            return;
        }

        if ($messagesInWindow === self::INDIVIDUAL_EMAIL_LIMIT + 1) {
            Mail::to($recipient)->send(new ContactMessageBurstSummary(
                self::INDIVIDUAL_EMAIL_LIMIT,
                self::BURST_WINDOW_MINUTES,
                $windowEnd,
            ));
        }
    }
}
