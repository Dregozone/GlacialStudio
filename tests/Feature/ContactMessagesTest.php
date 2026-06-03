<?php

use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Spatie\Honeypot\Exceptions\SpamException;
use Spatie\Honeypot\SpamProtection;

uses(RefreshDatabase::class);

function validCaptchaSession(): array
{
    return [
        'contact_captcha_left' => 3,
        'contact_captcha_right' => 4,
        'contact_captcha_answer' => 7,
    ];
}

it('stores a submitted contact message with new status', function () {
    $response = $this->withSession(validCaptchaSession())->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello from a feature test',
        'captcha' => '7',
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
    session()->put(validCaptchaSession());
    config(['honeypot.amount_of_seconds' => -10]);

    Livewire::test('contact')
        ->set('name', ' <b>Test User</b> ')
        ->set('email', ' TEST@EXAMPLE.COM ')
        ->set('message', '<script>alert("xss")</script>Hello <b>world</b>')
        ->set('captcha', '7')
        ->call('submit')
        ->assertSet('name', '')
        ->assertSet('email', '')
        ->assertSet('message', '')
        ->assertSet('captcha', '')
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
    $response = $this->withSession(validCaptchaSession())->from(route('home'))->post(route('contact.submit'), [
        'name' => '',
        'email' => 'invalid-email',
        'message' => '',
        'captcha' => '',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasErrors(['name', 'email', 'message', 'captcha']);
});

it('validates required fields through the livewire contact form', function () {
    session()->put(validCaptchaSession());
    config(['honeypot.amount_of_seconds' => -10]);

    Livewire::test('contact')
        ->set('email', 'invalid-email')
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'message', 'captcha'])
        ->assertSee('Please correct the highlighted fields and try again.');

    expect(ContactMessage::query()->count())->toBe(0);
});

it('sanitizes dangerous contact submission input before storing', function () {
    $this->withSession(validCaptchaSession())->post(route('contact.submit'), [
        'name' => ' <b>Test User</b> ',
        'email' => ' TEST@EXAMPLE.COM ',
        'message' => '<script>alert("xss")</script>Hello <b>world</b>',
        'captcha' => '7',
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
    $response = $this->withSession(validCaptchaSession())->from(route('home'))->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => '<script>alert("xss")</script>',
        'captcha' => '7',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasErrors(['message']);

    expect(ContactMessage::query()->count())->toBe(0);
});

it('rejects contact submission with an incorrect captcha answer', function () {
    $response = $this->withSession(validCaptchaSession())->from(route('home'))->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello there',
        'captcha' => '99',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasErrors('captcha');

    expect(ContactMessage::query()->count())->toBe(0);
});

it('shows a livewire validation error when the captcha answer is incorrect', function () {
    session()->put(validCaptchaSession());
    config(['honeypot.amount_of_seconds' => -10]);

    Livewire::test('contact')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->set('message', 'Hello there')
        ->set('captcha', '99')
        ->call('submit')
        ->assertHasErrors(['captcha'])
        ->assertSee('Captcha answer is incorrect.');

    expect(ContactMessage::query()->count())->toBe(0);
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

it('rejects contact submission when captcha challenge is missing', function () {
    $response = $this->from(route('home'))->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello there',
        'captcha' => '7',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasErrors('captcha');

    expect(ContactMessage::query()->count())->toBe(0);
});

it('silently fakes success when spam is detected', function () {
    session()->put(validCaptchaSession());

    $this->mock(SpamProtection::class)
        ->shouldReceive('check')
        ->andThrow(SpamException::class);

    Livewire::test('contact')
        ->set('name', 'Spammer')
        ->set('email', 'spam@example.com')
        ->set('message', 'Buy cheap stuff')
        ->set('captcha', '7')
        ->call('submit')
        ->assertSet('successMessage', 'Message sent successfully!');

    expect(ContactMessage::query()->count())->toBe(0);
});

it('silently fakes success when the form is submitted too quickly', function () {
    session()->put(validCaptchaSession());
    config(['honeypot.amount_of_seconds' => 3600]);

    Livewire::test('contact')
        ->set('name', 'Spammer')
        ->set('email', 'spam@example.com')
        ->set('message', 'Buy cheap stuff')
        ->set('captcha', '7')
        ->call('submit')
        ->assertSet('successMessage', 'Message sent successfully!');

    expect(ContactMessage::query()->count())->toBe(0);
});
