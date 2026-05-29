<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

#[Signature('make:admin {email : The email address for the new admin user}')]
#[Description('Create a new admin user for the provided email address.')]
class MakeAdmin extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $email = (string) $this->argument('email');

        if (User::query()->where('email', $email)->exists()) {
            $this->error("A user with email [{$email}] already exists.");

            return self::FAILURE;
        }

        $user = new User;
        $user->name = 'Admin';
        $user->email = $email;
        $user->email_verified_at = now();
        $user->password = Str::random(40);
        $user->is_admin = true;
        $user->save();

        $this->info("Admin user [{$user->email}] created successfully.");

        return self::SUCCESS;
    }
}
