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
                'description' => 'Speak with our team of experts to get your web application developed.',
                'features' => '', // Unused
                'default' => false,
                'monthly_price' => NULL,
                'yearly_price' => NULL,
                'one_time_price' => 999.0,
                'active' => true,
                'img' => 'softwareGears.png',
                'link' => '', // Unused
            ],
            [
                'name' => 'Consulting',
                'description' => 'Consult with Glacial Studio to get your new project idea off the ground or to improve an existing product.',
                'features' => '',
                'default' => false,
                'monthly_price' => NULL,
                'yearly_price' => NULL,
                'one_time_price' => 999.0,
                'active' => true,
                'img' => 'consulting.png',
                'link' => '',
            ],

            // TO ADD
            /*
                Web Application Development (Full website and tools)
                Single Page Application Development (SPA)
                Browser-based Game Development
                Blog Site Development
                E-commerce Shop
                IoT Development (Microcontrollers, Raspberry Pi, etc.)
                Custom Project (Enquire for more information)
            */
        ];

        foreach ($toAdd as $data) {
            Service::create($data);
        }
    }
}
