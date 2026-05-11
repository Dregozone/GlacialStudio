<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Web Application Development',
                'description' => 'Speak with our team of experts to get your web application developed.',
                'features' => '',
                'default' => false,
                'monthly_price' => null,
                'yearly_price' => null,
                'one_time_price' => 999.0,
                'active' => true,
                'img' => 'softwareGears.png',
                'link' => '',
            ],
            [
                'name' => 'Consulting',
                'description' => 'Consult with Glacial Studio to get your new project idea off the ground or to improve an existing product.',
                'features' => '',
                'default' => false,
                'monthly_price' => null,
                'yearly_price' => null,
                'one_time_price' => 999.0,
                'active' => true,
                'img' => 'consulting.png',
                'link' => '',
            ],
        ]);

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
    }

    public function down(): void
    {
        DB::table('services')->whereIn('name', [
            'Web Application Development', 'Consulting',
        ])->delete();
    }
};
