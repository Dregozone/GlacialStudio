<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

it('creates an admin user for the provided email address', function () {
    $this->artisan('make:admin', [
        'email' => 'test@email.com',
    ])->assertExitCode(0);

    $user = User::query()->firstWhere('email', 'test@email.com');

    expect($user)->not->toBeNull()
        ->and($user->name)->toBe('Admin')
        ->and($user->is_admin)->toBeTrue()
        ->and($user->email_verified_at)->not->toBeNull();
});

it('fails to create an admin user when the email already exists', function () {
    User::factory()->create([
        'email' => 'test@email.com',
    ]);

    $this->artisan('make:admin', [
        'email' => 'test@email.com',
    ])->assertExitCode(1);
});

it('sets the identifier for an existing user', function () {
    $user = User::factory()->create([
        'email' => 'test@email.com',
    ]);

    $this->artisan('set:identifier', [
        'email' => 'test@email.com',
        'identifier' => 'example-identifier',
    ])->assertExitCode(0);

    expect($user->refresh()->identifier)->toBe('example-identifier');
});

it('fails to set an identifier for a missing user', function () {
    $this->artisan('set:identifier', [
        'email' => 'missing@email.com',
        'identifier' => 'example-identifier',
    ])->assertExitCode(1);
});

it('sets the token for an existing user as a hash', function () {
    $user = User::factory()->create([
        'email' => 'test@email.com',
    ]);

    $this->artisan('set:token', [
        'email' => 'test@email.com',
        'token' => 'example-token',
    ])->assertExitCode(0);

    $user->refresh();

    expect($user->token)
        ->not->toBe('example-token')
        ->and(Hash::check('example-token', $user->token))->toBeTrue();
});

it('fails to set a token for a missing user', function () {
    $this->artisan('set:token', [
        'email' => 'missing@email.com',
        'token' => 'example-token',
    ])->assertExitCode(1);
});
