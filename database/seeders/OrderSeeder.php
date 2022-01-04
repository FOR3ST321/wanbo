<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'room_id'=>1,
            'user_id'=>1,
            'status'=>'pending',
            'total_price'=>50000,
            'schedule'=>'2022-01-04 21:24:33',
            'checkin'=>'2022-01-04 21:24:33',
            'checkout'=>'2022-01-04 21:24:33'
        ]);
    }
}
