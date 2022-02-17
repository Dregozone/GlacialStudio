<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear table before populating
        Project::truncate();

        // Add record(s)
        Project::create([
            'name' => 'adscreens',
            'description' => '',
            'image' => 'adscreens.jpg',
            'tags' => '',
            'order' => 10,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Face Facts',
            'description' => '',
            'image' => 'FaceFacts.jpg',
            'tags' => '',
            'order' => 20,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'i-walk',
            'description' => '',
            'image' => 'i-walk.jpg',
            'tags' => '',
            'order' => 30,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Little Moore Lighting',
            'description' => '',
            'image' => 'LittleMooreLighting.jpg',
            'tags' => '',
            'order' => 40,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Holistic Vision',
            'description' => '',
            'image' => 'HolisticVision.jpg',
            'tags' => '',
            'order' => 50,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Bling Wing',
            'description' => '',
            'image' => 'BlingWing.jpg',
            'tags' => '',
            'order' => 60,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Exclusion Zone',
            'description' => '',
            'image' => 'ExclusionZone.jpg',
            'tags' => '',
            'order' => 70,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Energized Gaming',
            'description' => '',
            'image' => 'EnergizedGaming.jpg',
            'tags' => '',
            'order' => 80,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'PhpChain',
            'description' => '',
            'image' => 'PhpChain.jpg',
            'tags' => '',
            'order' => 90,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Bee Active',
            'description' => '',
            'image' => 'BeeActive.jpg',
            'tags' => '',
            'order' => 100,
            'is_active' => true,
        ]);
    }
}
