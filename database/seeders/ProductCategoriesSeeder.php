<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear table before populating
        ProductCategory::truncate();

        // Add record(s)
        ProductCategory::create([
            'name' => 'Web-based',
            'description' => 'For a variety of websites and tools.',
            'tag' => 'web',
            'order' => 10,
            'is_active' => true,
        ]);

        ProductCategory::create([
            'name' => 'IoT/Hybrid',
            'description' => 'For projects integrating between software and hardware.',
            'tag' => 'iot',
            'order' => 20,
            'is_active' => true,
        ]);

        ProductCategory::create([
            'name' => 'Custom',
            'description' => 'Get in touch to discuss your custom projects.',
            'tag' => 'custom',
            'order' => 30,
            'is_active' => true,
        ]);
    }
}
