<?php

use App\Models\ContactMessage;
use App\Models\User;
use App\Services\TurnstileVerifier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Spatie\Honeypot\Exceptions\SpamException;
use Spatie\Honeypot\SpamProtection;

uses(RefreshDatabase::class);

/**
 * @param  array<string, mixed>  $overrides
 */
function fakeTurnstileSuccess(array $overrides = []): void
{
    Http::fake([
        TurnstileVerifier::SITEVERIFY_URL => Http::response([
            'success' => true,
            'action' => 'contact',
            'hostname' => 'localhost',
            ...$overrides,
        ], 200),
    ]);
}

it('stores a submitted contact message with new status', function () {
    fakeTurnstileSuccess();
    $response = $this->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello from a feature test',
        'cf-turnstile-response' => 'test-turnstile-token',
    ]);

    $response->assertRedirect(route('home'));

    $this->assertDatabaseHas('contact_messages', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello from a feature test',
        'status' => 'new',
    ]);
});

it('submits the contact form through the livewire component', function () {
    fakeTurnstileSuccess();
    config(['honeypot.amount_of_seconds' => -10]);

    Livewire::test('contact')
        ->set('name', ' <b>Test User</b> ')
        ->set('email', ' TEST@EXAMPLE.COM ')
        ->set('message', '<script>alert("xss")</script>Hello <b>world</b>')
        ->set('cfTurnstileResponse', 'test-turnstile-token')
        ->call('submit')
        ->assertSet('name', '')
        ->assertSet('email', '')
        ->assertSet('message', '')
        ->assertSet('cfTurnstileResponse', '')
        ->assertSet('successMessage', 'Message sent successfully!')
        ->assertSee('Message sent successfully!');

    $this->assertDatabaseHas('contact_messages', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello world',
        'status' => 'new',
    ]);
});

it('rejects API access when credentials are not an admin account', function () {
    User::factory()->create([
        'is_admin' => false,
        'identifier' => 'admin-id',
        'token' => Hash::make('admin-token'),
    ]);

    $this->getJson('/api/messages/admin-id/admin-token')
        ->assertForbidden();
});

it('rejects API access when admin token is incorrect', function () {
    User::factory()->adminAccess('admin-id', 'admin-token')->create();

    $this->getJson('/api/messages/admin-id/wrong-token')
        ->assertForbidden();
});

it('returns messages json for admin credentials', function () {
    User::factory()->adminAccess('admin-id', 'admin-token')->create();
    ContactMessage::factory()->create([
        'name' => 'API User',
        'email' => 'api@example.com',
        'message' => 'API visible message',
        'status' => 'new',
    ]);

    $this->getJson('/api/messages/admin-id/admin-token')
        ->assertOk()
        ->assertJsonPath('0.name', 'API User')
        ->assertJsonPath('0.status', 'new');
});

it('validates required contact submission fields', function () {
    fakeTurnstileSuccess();
    $response = $this->from(route('home'))->post(route('contact.submit'), [
        'name' => '',
        'email' => 'invalid-email',
        'message' => '',
        'cf-turnstile-response' => 'test-turnstile-token',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasErrors(['name', 'email', 'message']);
});

it('validates required fields through the livewire contact form', function () {
    fakeTurnstileSuccess();
    config(['honeypot.amount_of_seconds' => -10]);

    Livewire::test('contact')
        ->set('cfTurnstileResponse', 'test-turnstile-token')
        ->set('email', 'invalid-email')
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'message'])
        ->assertSee('Please correct the highlighted fields and try again.');

    expect(ContactMessage::query()->count())->toBe(0);
});

it('sanitizes dangerous contact submission input before storing', function () {
    fakeTurnstileSuccess();
    $this->post(route('contact.submit'), [
        'name' => ' <b>Test User</b> ',
        'email' => ' TEST@EXAMPLE.COM ',
        'message' => '<script>alert("xss")</script>Hello <b>world</b>',
        'cf-turnstile-response' => 'test-turnstile-token',
    ])->assertRedirect(route('home'));

    $this->assertDatabaseHas('contact_messages', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello world',
        'status' => 'new',
    ]);

    $storedMessage = ContactMessage::query()->value('message');

    expect($storedMessage)->not->toContain('script')
        ->and($storedMessage)->not->toContain('alert');
});

it('rejects contact submission when message becomes empty after sanitization', function () {
    fakeTurnstileSuccess();
    $response = $this->from(route('home'))->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => '<script>alert("xss")</script>',
        'cf-turnstile-response' => 'test-turnstile-token',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasErrors(['message']);

    expect(ContactMessage::query()->count())->toBe(0);
});

it('accepts contact submissions without a manual captcha field', function () {
    fakeTurnstileSuccess();
    $response = $this->from(route('home'))->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello there',
        'cf-turnstile-response' => 'test-turnstile-token',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasNoErrors();

    expect(ContactMessage::query()->count())->toBe(1);
});

it('rejects controller submissions without a turnstile token', function () {
    $response = $this->from(route('home'))->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello there',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasErrors(['cfTurnstileResponse']);

    expect(ContactMessage::query()->count())->toBe(0);
    Http::assertNothingSent();
});

it('rejects livewire submissions when turnstile verification fails', function (array $siteverifyResponse) {
    fakeTurnstileSuccess($siteverifyResponse);
    config(['honeypot.amount_of_seconds' => -10]);

    Livewire::test('contact')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->set('message', 'Hello there')
        ->set('cfTurnstileResponse', 'test-turnstile-token')
        ->call('submit')
        ->assertHasErrors(['cfTurnstileResponse'])
        ->assertSet('cfTurnstileResponse', '')
        ->assertDispatched('turnstile-reset');

    expect(ContactMessage::query()->count())->toBe(0);
})->with([
    'unsuccessful' => [['success' => false, 'error-codes' => ['invalid-input-response']]],
    'wrong action' => [['action' => 'login']],
    'wrong hostname' => [['hostname' => 'evil.example.com']],
]);

it('requires a turnstile token for livewire submissions', function () {
    config(['honeypot.amount_of_seconds' => -10]);

    Livewire::test('contact')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->set('message', 'Hello there')
        ->call('submit')
        ->assertHasErrors(['cfTurnstileResponse']);

    expect(ContactMessage::query()->count())->toBe(0);
    Http::assertNothingSent();
});

it('submits through livewire without requiring a manual captcha answer', function () {
    fakeTurnstileSuccess();
    config(['honeypot.amount_of_seconds' => -10]);

    Livewire::test('contact')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->set('message', 'Hello there')
        ->set('cfTurnstileResponse', 'test-turnstile-token')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('successMessage', 'Message sent successfully!');

    expect(ContactMessage::query()->count())->toBe(1);
});

it('allows admin message status updates from admin viewer page', function () {
    User::factory()->adminAccess('admin-id', 'admin-token')->create();
    $contactMessage = ContactMessage::factory()->create(['status' => 'new']);

    $response = $this->patch(route('admin.messages.update', ['admin-id', 'admin-token', $contactMessage]), [
        'status' => 'actioned',
    ]);

    $response->assertRedirect(route('admin.messages.index', ['admin-id', 'admin-token']));

    $this->assertDatabaseHas('contact_messages', [
        'id' => $contactMessage->id,
        'status' => 'actioned',
    ]);
});

it('allows admin to hard-delete contact messages from admin viewer page', function () {
    User::factory()->adminAccess('admin-id', 'admin-token')->create();
    $contactMessage = ContactMessage::factory()->create();

    $response = $this->delete(route('admin.messages.destroy', ['admin-id', 'admin-token', $contactMessage]));

    $response->assertRedirect(route('admin.messages.index', ['admin-id', 'admin-token']));
    $response->assertSessionHas('success', 'Message deleted.');

    $this->assertModelMissing($contactMessage);
});

it('silently fakes success when spam is detected', function () {
    $this->mock(SpamProtection::class)
        ->shouldReceive('check')
        ->andThrow(SpamException::class);

    Livewire::test('contact')
        ->set('name', 'Spammer')
        ->set('email', 'spam@example.com')
        ->set('message', 'Buy cheap stuff')
        ->call('submit')
        ->assertSet('successMessage', 'Message sent successfully!');

    expect(ContactMessage::query()->count())->toBe(0);
});

it('silently fakes success when the form is submitted too quickly', function () {
    config(['honeypot.amount_of_seconds' => 3600]);

    Livewire::test('contact')
        ->set('name', 'Spammer')
        ->set('email', 'spam@example.com')
        ->set('message', 'Buy cheap stuff')
        ->call('submit')
        ->assertSet('successMessage', 'Message sent successfully!');

    expect(ContactMessage::query()->count())->toBe(0);
});
