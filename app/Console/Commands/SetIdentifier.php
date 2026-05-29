<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('set:identifier {email : The email address of the user} {identifier : The identifier to assign}')]
#[Description('Set the admin identifier for an existing user.')]
class SetIdentifier extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $email = (string) $this->argument('email');
        $identifier = (string) $this->argument('identifier');

        $user = User::query()->firstWhere('email', $email);

        if ($user === null) {
            $this->error("No user found for email [{$email}].");

            return self::FAILURE;
        }

        $identifierExists = User::query()
            ->where('identifier', $identifier)
            ->whereKeyNot($user->getKey())
            ->exists();

        if ($identifierExists) {
            $this->error("The identifier [{$identifier}] is already assigned to another user.");

            return self::FAILURE;
        }

        $user->update([
            'identifier' => $identifier,
        ]);

        $this->info("Identifier [{$identifier}] set for user [{$user->email}].");

        return self::SUCCESS;
    }
}
