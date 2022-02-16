<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear table before populating
        Product::truncate();

        // Add record(s)
        // Web-based category
        Product::create([
            'title' => 'Full website',
            'price' => '24',
            'details' => 'Most popular|Professional websites|Personal websites',
            'category_id' => 1,
            'order' => 10,
            'link' => 'link1',
            'is_active' => true,
        ]);

        Product::create([
            'title' => 'Single page application',
            'price' => '10',
            'details' => 'Landing pages|Quality dashboards|Wizard applications',
            'category_id' => 1,
            'order' => 20,
            'link' => 'link2',
            'is_active' => true,
        ]);

        Product::create([
            'title' => 'Browser-based game',
            'price' => '19',
            'details' => 'MMORPG|Admin dashboards|Scalable solutions',
            'category_id' => 1,
            'order' => 30,
            'link' => 'link3',
            'is_active' => true,
        ]);

        Product::create([
            'title' => 'eCommerce Shop',
            'price' => '99',
            'details' => 'Online shop|Admin dashboards|User metrics',
            'category_id' => 1,
            'order' => 40,
            'link' => 'link4',
            'is_active' => true,
        ]);


        // IoT/Hybrid category
        Product::create([
            'title' => 'IoT project',
            'price' => '99',
            'details' => 'Web-based|Frontend monitors|Hardware control',
            'category_id' => 2,
            'order' => 10,
            'link' => 'link1',
            'is_active' => true,
        ]);

        Product::create([
            'title' => 'Microcontroller',
            'price' => '99',
            'details' => 'Full life cycle|Comprehensive testing|Bring projects to life',
            'category_id' => 2,
            'order' => 20,
            'link' => 'link2',
            'is_active' => true,
        ]);


        // Custom category
        Product::create([
            'title' => 'Custom project',
            'price' => 'TBC',
            'details' => 'Please enquire about custom project requests',
            'category_id' => 3,
            'order' => 10,
            'link' => 'linkCustom',
            'is_active' => true,
        ]);
    }
}
