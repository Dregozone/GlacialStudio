<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::truncate();

        $toAdd = [
            [
                'name' => 'Better Planner',
                'description' => 'A helpful habit tracker and planner to help you stay on top of your daily tasks and goals',
                'features' => 'Ad-free|Daily & weekly tracking|Customisable',
                'default' => true,
                'monthly_price' => 2.99,
                'yearly_price' => 29.99,
                'one_time_price' => NULL,
                'active' => true,
                'img' => 'planner.png',
                'link' => 'https://planner.glacialstudio.co.uk',
            ],
            [
                'name' => 'Scribe MES',
                'description' => 'Enterprise Manufacturing Execution System with focus on data integrity, control and performance to enable your operators to perform with minimal interuptions',
                'features' => 'Rapid performance|Data integrity|Web browser based',
                'default' => false,
                'monthly_price' => NULL,
                'yearly_price' => 8999,
                'one_time_price' => NULL,
                'active' => true,
                'img' => 'scribe.png',
                'link' => 'https://scribe.glacialstudio.co.uk',
            ],
            [
                'name' => 'Candles',
                'description' => 'Online store for uniquely scented candles',
                'features' => 'Unusual but recognisable scents|Great for gifts|Environmentally friendly',
                'default' => false,
                'monthly_price' => NULL,
                'yearly_price' => NULL,
                'one_time_price' => -1,
                'active' => true,
                'img' => 'candles.png',
                'link' => 'https://candles.glacialstudio.co.uk',
            ],
            [
                'name' => 'BeeActive',
                'description' => 'Some short description',
                'features' => 'first|second|third',
                'default' => false,
                'monthly_price' => 5.99,
                'yearly_price' => 49.99,
                'one_time_price' => NULL,
                'active' => false,
                'img' => 'beeactive.png',
                'link' => 'https://beeactive.glacialstudio.co.uk',
            ],
            [
                'name' => 'Booker',
                'description' => 'Some short description',
                'features' => 'first|second|third',
                'default' => false,
                'monthly_price' => 9.99,
                'yearly_price' => 89.99,
                'one_time_price' => NULL,
                'active' => false,
                'img' => 'booker.png',
                'link' => 'https://booker.glacialstudio.co.uk',
            ],
        ];

        foreach ($toAdd as $data) {
            Product::create($data);
        }
    }
}
