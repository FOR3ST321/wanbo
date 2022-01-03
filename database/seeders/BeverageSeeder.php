<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beverage;

class BeverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beverage::create([
            'beverage_name' => 'Tubruk Hard Coffee',
            'type' => 'drink',
            'price' => 21000,
            'description' => 'this is a tubruk hard coffee'
        ]);
        
        Beverage::create([
            'beverage_name' => 'Dark Choco Hot',
            'type' => 'drink',
            'price' => 18000,
            'description' => 'this is a dark choco hot'
        ]);

        Beverage::create([
            'beverage_name' => 'Thai Tea',
            'type' => 'drink',
            'price' => 18000,
            'description' => 'this is a thai tea'
        ]);

        Beverage::create([
            'beverage_name' => 'Bandrek',
            'type' => 'drink',
            'price' => 8500,
            'description' => 'this is a bandrek'
        ]);

        Beverage::create([
            'beverage_name' => 'Fried Rice',
            'type' => 'food',
            'price' => 25000,
            'description' => 'this is a fried rice'
        ]);

        Beverage::create([
            'beverage_name' => 'Grilled Rice',
            'type' => 'food',
            'price' => 28000,
            'description' => 'this is a grilled rice'
        ]);

        Beverage::create([
            'beverage_name' => 'Indomie All Variants',
            'type' => 'food',
            'price' => 5000,
            'description' => 'these are indomie all variants'
        ]);

        Beverage::create([
            'beverage_name' => 'Toast',
            'type' => 'snack',
            'price' => 12000,
            'description' => 'this is a toast'
        ]);

        Beverage::create([
            'beverage_name' => 'Crispy Mushroom',
            'type' => 'snack',
            'price' => 4000,
            'description' => 'this is a crispy mushroom'
        ]);

        Beverage::create([
            'beverage_name' => 'Extra Cheese',
            'type' => 'other',
            'price' => 5000,
            'description' => 'this is an extra cheese'
        ]);

    }
}
