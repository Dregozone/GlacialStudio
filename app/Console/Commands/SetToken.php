<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

#[Signature('set:token {email : The email address of the user} {token : The plain-text token to assign}')]
#[Description('Set the admin token for an existing user.')]
class SetToken extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $email = (string) $this->argument('email');
        $token = (string) $this->argument('token');

        $user = User::query()->firstWhere('email', $email);

        if ($user === null) {
            $this->error("No user found for email [{$email}].");

            return self::FAILURE;
        }

        $user->update([
            'token' => Hash::make($token),
        ]);

        $this->info("Token updated for user [{$user->email}].");

        return self::SUCCESS;
    }
}
