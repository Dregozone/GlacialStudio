<?php

use App\Mail\ContactMessageBurstSummary;
use App\Mail\NewContactMessage;
use App\Models\BannedIpAddress;
use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;

uses(RefreshDatabase::class);

beforeEach(function () {
    config(['services.admin_notify.email' => 'admin@example.com']);
    Mail::fake();
});

it('emails the admin after a contact message is submitted', function () {
    $this->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello from a feature test',
    ])->assertRedirect(route('home'));

    Mail::assertSent(NewContactMessage::class, function (NewContactMessage $mail) {
        return $mail->hasTo('admin@example.com')
            && $mail->contactMessage->email === 'test@example.com';
    });
});

it('emails the admin after a contact message is submitted through livewire', function () {
    $this->withoutDefer();
    Http::fake([
        'https://challenges.cloudflare.com/turnstile/v0/siteverify' => Http::response(['success' => true], 200),
    ]);
    config(['honeypot.amount_of_seconds' => -10]);

    Livewire::test('contact')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->set('message', 'Hello there')
        ->set('cfTurnstileResponse', 'test-turnstile-token')
        ->call('submit')
        ->assertSet('successMessage', 'Message sent successfully!');

    Mail::assertSent(NewContactMessage::class, 1);
});

it('includes the sender details, message and time in the email', function () {
    $contactMessage = ContactMessage::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'I would like a new website.',
        'created_at' => '2026-10-16 14:30:00',
    ]);

    (new NewContactMessage($contactMessage))
        ->assertSeeInHtml('Test User')
        ->assertSeeInHtml('test@example.com')
        ->assertSeeInHtml('I would like a new website.')
        ->assertSeeInHtml('16 Oct 2026, 14:30');
});

it('sets the reply-to address to the sender', function () {
    $this->withoutDefer();

    ContactMessage::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);

    Mail::assertSent(NewContactMessage::class, function (NewContactMessage $mail) {
        return $mail->hasReplyTo('test@example.com', 'Test User');
    });
});

it('does not email the admin about messages from a banned ip address', function () {
    BannedIpAddress::query()->create(['ip_address' => '203.0.113.9', 'reason' => 'Spam']);

    $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.9'])
        ->post(route('contact.submit'), [
            'name' => 'Spammer',
            'email' => 'spam@example.com',
            'message' => 'Buy cheap stuff',
        ])->assertRedirect(route('home'));

    expect(ContactMessage::query()->count())->toBe(1);
    Mail::assertNothingSent();
});

it('does not email anyone when no admin address is configured', function () {
    $this->withoutDefer();
    config(['services.admin_notify.email' => null]);

    ContactMessage::factory()->create();

    Mail::assertNothingSent();
});

it('sends one summary instead of individual emails during a burst of messages', function () {
    $this->withoutDefer();
    $this->travelTo(now()->startOfHour());

    ContactMessage::factory()->count(8)->create();

    Mail::assertSent(NewContactMessage::class, 5);
    Mail::assertSent(ContactMessageBurstSummary::class, 1);

    $this->travel(10)->minutes();

    ContactMessage::factory()->create();

    Mail::assertSent(NewContactMessage::class, 6);
    Mail::assertSent(ContactMessageBurstSummary::class, 1);
});

it('still saves the contact message when the email fails to send', function () {
    Mail::shouldReceive('to')->andThrow(new RuntimeException('Resend is down'));
    Log::spy();

    $this->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello there',
    ])->assertRedirect(route('home'))
        ->assertSessionHas('success', 'Message sent successfully!');

    expect(ContactMessage::query()->count())->toBe(1);
    Log::shouldHaveReceived('error')->once();
});
