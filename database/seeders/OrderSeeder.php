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
            'total_price'=>15000,
            'schedule'=>'2022-01-06 11:15:00',
            'checkin'=>'2022-01-06 00:00:00',
            'checkout'=>'2022-01-06 00:00:00'
        ]);

        Order::create([
            'room_id'=>2,
            'user_id'=>2,
            'status'=>'canceled',
            'total_price'=>5000,
            'schedule'=>'2022-01-06 12:00:00',
            'checkin'=>'2022-01-06 00:00:00',
            'checkout'=>'2022-01-06 00:00:00'
        ]);

        Order::create([
            'room_id'=>3,
            'user_id'=>3,
            'status'=>'failed',
            'total_price'=>20000,
            'schedule'=>'2022-01-06 12:20:00',
            'checkin'=>'2022-01-06 00:00:00',
            'checkout'=>'2022-01-06 00:00:00'
        ]);

        Order::create([
            'room_id'=>4,
            'user_id'=>4,
            'status'=>'paid',
            'total_price'=>15000,
            'schedule'=>'2022-01-06 12:25:00',
            'checkin'=>'2022-01-06 00:00:00',
            'checkout'=>'2022-01-06 00:00:00'
        ]);

        Order::create([
            'room_id'=>5,
            'user_id'=>5,
            'status'=>'booked',
            'total_price'=>10000,
            'schedule'=>'2022-01-06 12:40:00',
            'checkin'=>'2022-01-06 12:50:00',
            'checkout'=>'2022-01-06 00:00:00'
        ]);

        Order::create([
            'room_id'=>6,
            'user_id'=>7,
            'status'=>'done',
            'total_price'=>24000,
            'schedule'=>'2022-01-06 13:05:00',
            'checkin'=>'2022-01-06 13:10:00',
            'checkout'=>'2022-01-06 15:08:33'
        ]);

        Order::create([
            'room_id'=>7,
            'user_id'=>8,
            'status'=>'done',
            'total_price'=>36000,
            'schedule'=>'2022-01-06 13:20:00',
            'checkin'=>'2022-01-06 13:20:59',
            'checkout'=>'2022-01-06 16:03:21'
        ]);

        Order::create([
            'room_id'=>8,
            'user_id'=>9,
            'status'=>'canceled',
            'total_price'=>5000,
            'schedule'=>'2022-01-06 14:25:00',
            'checkin'=>'2022-01-06 00:00:00',
            'checkout'=>'2022-01-06 00:00:00'
        ]);

        Order::create([
            'room_id'=>9,
            'user_id'=>10,
            'status'=>'paid',
            'total_price'=>10000,
            'schedule'=>'2022-01-06 15:30:00',
            'checkin'=>'2022-01-06 00:00:00',
            'checkout'=>'2022-01-06 00:00:00'
        ]);

        Order::create([
            'room_id'=>10,
            'user_id'=>11,
            'status'=>'pending',
            'total_price'=>30000,
            'schedule'=>'2022-01-06 18:30:00',
            'checkin'=>'2022-01-06 00:00:00',
            'checkout'=>'2022-01-06 00:00:00'
        ]);
    }
}
