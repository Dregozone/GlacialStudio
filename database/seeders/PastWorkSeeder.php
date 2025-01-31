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
                'description' => '',
                'type' => 'website',
                'img' => 'adscreens.jpg',
                'active' => 1,
                'order' => 10,
            ],
            [
                'name' => 'i-walk',
                'description' => '',
                'type' => 'website',
                'img' => 'iwalk.jpg',
                'active' => 1,
                'order' => 10,
            ],
            [
                'name' => 'Little Moore Lighting',
                'description' => '',
                'type' => 'website',
                'img' => 'littlemoorelighting.jpg',
                'active' => 1,
                'order' => 10,
            ],
            [
                'name' => 'Face Facts Clinic',
                'description' => '',
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
                'active' => 1,
                'order' => 10,
            ],
            [
                'name' => 'Bling Wing',
                'description' => '',
                'type' => 'website',
                'img' => 'blingwing.jpg',
                'active' => 1,
                'order' => 10,
            ],
            [
                'name' => 'ExclusionZone',
                'description' => '',
                'type' => 'website',
                'img' => 'exclusionzone.jpg',
                'active' => 1,
                'order' => 10,
            ],
            [
                'name' => 'EnergizedGaming',
                'description' => '',
                'type' => 'website',
                'img' => 'energizedgaming.jpg',
                'active' => 1,
                'order' => 10,
            ],
        ];

        foreach ($toAdd as $data) {
            PastWork::create($data);
        }
    }
}
