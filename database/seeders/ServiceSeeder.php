<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::truncate();

        $toAdd = [
            [
                'name' => 'Web Application Development',
                'description' => '',
                'features' => '',
                'default' => false,
                'monthly_price' => NULL,
                'yearly_price' => NULL,
                'one_time_price' => 999.0,
                'active' => true,
                'img' => '',
                'link' => '',
            ],
            [
                'name' => 'Consulting',
                'description' => '',
                'features' => '',
                'default' => false,
                'monthly_price' => NULL,
                'yearly_price' => NULL,
                'one_time_price' => 999.0,
                'active' => true,
                'img' => '',
                'link' => '',
            ],
            [
                'name' => '',
                'description' => '',
                'features' => '',
                'default' => false,
                'monthly_price' => NULL,
                'yearly_price' => NULL,
                'one_time_price' => 999.0,
                'active' => false,
                'img' => '',
                'link' => '',
            ],
        ];

        foreach ($toAdd as $data) {
            Service::create($data);
        }
    }
}
