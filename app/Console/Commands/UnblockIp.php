<?php

namespace App\Console\Commands;

use App\Models\BannedIpAddress;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('unblock {ip : The IP address to unblock}')]
#[Description('Remove an IP address from the banned list.')]
class UnblockIp extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $ip = $this->argument('ip');

        $deleted = BannedIpAddress::where('ip_address', $ip)->delete();

        if ($deleted === 0) {
            $this->warn("IP address [{$ip}] was not found in the banned list.");

            return self::FAILURE;
        }

        $this->info("IP address [{$ip}] has been unblocked.");

        return self::SUCCESS;
    }
}
