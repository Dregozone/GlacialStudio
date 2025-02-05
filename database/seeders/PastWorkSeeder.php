<?php

namespace Database\Seeders;

use App\Models\PastWork;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PastWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PastWork::truncate();

        $toAdd = [
            [
                'name' => 'adscreens',
                'description' => 'New website bringing all information about the company and its products together.',
                'type' => 'website',
                'img' => 'adscreens.jpg',
                'active' => 1,
                'order' => 10,
            ],
            [
                'name' => 'i-walk',
                'description' => 'Landing page for a new product under development by a client in the advertising sector',
                'type' => 'website',
                'img' => 'iwalk.jpg',
                'active' => 1,
                'order' => 10,
            ],
            [
                'name' => 'Little Moore Lighting',
                'description' => 'Storefront, admin tools and customer metrics for a car headlight customisation business.',
                'type' => 'website',
                'img' => 'littlemoorelighting.jpg',
                'active' => 1,
                'order' => 10,
            ],
            [
                'name' => 'Face Facts Clinic',
                'description' => 'New website for a cosmetic clinic in the UK; with treatment details and appointment booking facilities.',
                'type' => 'website',
                'img' => 'facefactsclinic.jpg',
                'active' => 1,
                'order' => 10,
            ],
            [
                'name' => 'Holistic Vision',
                'description' => '',
                'type' => 'website',
                'img' => 'holisticvision.jpg',
                'active' => 0,
                'order' => 10,
            ],
            [
                'name' => 'Bling Wing',
                'description' => '',
                'type' => 'website',
                'img' => 'blingwing.jpg',
                'active' => 0,
                'order' => 10,
            ],
            [
                'name' => 'ExclusionZone',
                'description' => '',
                'type' => 'website',
                'img' => 'exclusionzone.jpg',
                'active' => 0,
                'order' => 10,
            ],
            [
                'name' => 'EnergizedGaming',
                'description' => '',
                'type' => 'website',
                'img' => 'energizedgaming.jpg',
                'active' => 0,
                'order' => 10,
            ],
        ];

        foreach ($toAdd as $data) {
            PastWork::create($data);
        }
    }
}
