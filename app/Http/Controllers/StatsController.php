<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\DailyVisitTotal;
use App\Models\PageVisit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StatsController extends Controller
{
    /**
     * Daily counts for the heartbeat, for the given date or yesterday by default.
     */
    public function daily(Request $request): JsonResponse
    {
        $statsToken = config('services.stats.token');

        abort_if(blank($statsToken), 404);

        if (! is_string($request->bearerToken()) || ! hash_equals($statsToken, $request->bearerToken())) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }

        $validated = $request->validate([
            'date' => ['nullable', 'date_format:Y-m-d'],
        ]);

        $timezone = config('visits.timezone');
        $date = $validated['date'] ?? now($timezone)->subDay()->toDateString();
        $startOfDay = Carbon::parse($date, $timezone)->startOfDay();

        return response()->json([
            'app' => 'Glacial Studio',
            'date' => $date,
            'contact_messages' => ContactMessage::query()
                ->where('created_at', '>=', $startOfDay->copy()->setTimezone(config('app.timezone')))
                ->where('created_at', '<', $startOfDay->copy()->addDay()->setTimezone(config('app.timezone')))
                ->count(),
            'visits' => $this->visitCounts($date),
        ]);
    }

    /**
     * @return array{human: int, unique: int}
     */
    private function visitCounts(string $date): array
    {
        $total = DailyVisitTotal::query()->firstWhere('date', $date);

        if ($total !== null) {
            return [
                'human' => $total->human_visits,
                'unique' => $total->unique_visitors,
            ];
        }

        return [
            'human' => PageVisit::query()->where('date', $date)->count(),
            'unique' => PageVisit::query()->where('date', $date)->distinct()->count('visitor_hash'),
        ];
    }
}
