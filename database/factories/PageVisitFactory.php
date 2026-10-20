<?php

namespace Database\Factories;

use App\Models\PageVisit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PageVisit>
 */
class PageVisitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => PageVisit::today(),
            'visitor_hash' => hash('sha256', fake()->uuid()),
            'path' => '/',
        ];
    }

    /**
     * Visits made on a given day.
     */
    public function on(string $date): static
    {
        return $this->state(fn (): array => ['date' => $date]);
    }

    /**
     * Visits made by a given visitor.
     */
    public function by(string $visitorHash): static
    {
        return $this->state(fn (): array => ['visitor_hash' => $visitorHash]);
    }
}
