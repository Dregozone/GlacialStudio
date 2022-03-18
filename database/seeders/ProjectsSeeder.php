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
            'about' => '',
            'description' => '',
            'image' => 'adscreens.jpg',
            'tags' => '',
            'order' => 10,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Face Facts',
            'about' => '',
            'description' => '',
            'image' => 'FaceFacts.jpg',
            'tags' => '',
            'order' => 20,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'i-walk',
            'about' => '',
            'description' => '',
            'image' => 'i-walk.jpg',
            'tags' => '',
            'order' => 30,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Little Moore Lighting',
            'about' => '',
            'description' => '',
            'image' => 'LittleMooreLighting.jpg',
            'tags' => '',
            'order' => 40,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Holistic Vision',
            'about' => '',
            'description' => '',
            'image' => 'HolisticVision.jpg',
            'tags' => '',
            'order' => 50,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Bling Wing',
            'about' => '',
            'description' => '',
            'image' => 'BlingWing.jpg',
            'tags' => '',
            'order' => 60,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Exclusion Zone',
            'about' => '',
            'description' => '',
            'image' => 'ExclusionZone.jpg',
            'tags' => '',
            'order' => 70,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Energized Gaming',
            'about' => '',
            'description' => '',
            'image' => 'EnergizedGaming.jpg',
            'tags' => '',
            'order' => 80,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'PhpChain',
            'about' => '',
            'description' => '',
            'image' => 'PhpChain.jpg',
            'tags' => '',
            'order' => 90,
            'is_active' => true,
        ]);

        Project::create([
            'name' => 'Bee Active',
            'about' => 'Personal fitness and nutrition',
            'description' => '
                App allows users to enter current weight and fitness goals, this calculates their daily targets. Users can then 
                record their daily intake via meal entry screen and workouts completed.
            ',
            'image' => 'BeeActive.jpg',
            'tags' => 'Fitness,Nutrition,tech_Laravel,tech_MsSQL,tech_PWA',
            'order' => 100,
            'is_active' => true,
        ]);
    }
}
