<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FoodOrder;

class FoodOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodOrder::create([
            'order_id'=>1,
            'beverage_id'=>2,
            'quantity'=>3,
            'food_status'=>'pending'
        ]);

        FoodOrder::create([
            'order_id'=>2,
            'beverage_id'=>2,
            'quantity'=>3,
            'food_status'=>'pending'
        ]);

        FoodOrder::create([
            'order_id'=>3,
            'beverage_id'=>3,
            'quantity'=>3,
            'food_status'=>'pending'
        ]);

        FoodOrder::create([
            'order_id'=>4,
            'beverage_id'=>2,
            'quantity'=>3,
            'food_status'=>'canceled'
        ]);
    }
}
