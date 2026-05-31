<?php

use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

it('stores a submitted contact message with new status', function () {
    $response = $this->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello from a feature test',
    ]);

    $response->assertRedirect(route('home'));

    $this->assertDatabaseHas('contact_messages', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => 'Hello from a feature test',
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
    $response = $this->from(route('home'))->post(route('contact.submit'), [
        'name' => '',
        'email' => 'invalid-email',
        'message' => '',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasErrors(['name', 'email', 'message']);
});

it('sanitizes dangerous contact submission input before storing', function () {
    $this->post(route('contact.submit'), [
        'name' => ' <b>Test User</b> ',
        'email' => ' TEST@EXAMPLE.COM ',
        'message' => '<script>alert("xss")</script>Hello <b>world</b>',
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
    $response = $this->from(route('home'))->post(route('contact.submit'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'message' => '<script>alert("xss")</script>',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasErrors(['message']);

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
