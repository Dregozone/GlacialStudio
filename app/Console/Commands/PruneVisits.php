<?php

namespace App\Console\Commands;

use App\Models\DailyVisitTotal;
use App\Models\PageVisit;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('visits:prune')]
#[Description('Delete visit rows past the retention period, keeping their daily totals.')]
class PruneVisits extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $cutoff = now(config('visits.timezone'))
            ->subDays((int) config('visits.retention_days'))
            ->toDateString();

        $dailyCounts = PageVisit::query()
            ->where('date', '<', $cutoff)
            ->selectRaw('date, count(*) as human_visits, count(distinct visitor_hash) as unique_visitors')
            ->groupBy('date')
            ->get();

        foreach ($dailyCounts as $dailyCount) {
            DailyVisitTotal::updateOrCreate(
                ['date' => $dailyCount->date],
                [
                    'human_visits' => $dailyCount->human_visits,
                    'unique_visitors' => $dailyCount->unique_visitors,
                ]
            );
        }

        $deleted = PageVisit::query()->where('date', '<', $cutoff)->delete();

        $this->info("Pruned {$deleted} visit rows older than {$cutoff}; kept totals for {$dailyCounts->count()} days.");

        return self::SUCCESS;
    }
}
