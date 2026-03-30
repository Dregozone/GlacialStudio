<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Better Planner',
                'description' => 'A helpful habit tracker and planner to help you stay on top of your daily tasks and goals',
                'features' => 'Ad-free|Daily & weekly tracking|Customisable',
                'default' => true,
                'monthly_price' => 2.99,
                'yearly_price' => 29.99,
                'one_time_price' => null,
                'active' => true,
                'img' => 'planner.png',
                'link' => 'https://planner.glacialstudio.co.uk',
            ],
            [
                'name' => 'Scribe MES',
                'description' => 'Enterprise Manufacturing Execution System with focus on data integrity, control and performance to enable your operators to perform with minimal interuptions',
                'features' => 'Rapid performance|Data integrity|Web browser based',
                'default' => false,
                'monthly_price' => null,
                'yearly_price' => 8999,
                'one_time_price' => null,
                'active' => true,
                'img' => 'scribe.png',
                'link' => 'https://scribe.glacialstudio.co.uk',
            ],
            [
                'name' => 'Candles',
                'description' => 'Online store for uniquely scented candles',
                'features' => 'Unusual but recognisable scents|Great for gifts|Environmentally friendly',
                'default' => false,
                'monthly_price' => null,
                'yearly_price' => null,
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
                'one_time_price' => null,
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
                'one_time_price' => null,
                'active' => false,
                'img' => 'booker.png',
                'link' => 'https://booker.glacialstudio.co.uk',
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('products')->whereIn('name', [
            'Better Planner', 'Scribe MES', 'Candles', 'BeeActive', 'Booker',
        ])->delete();
    }
};
