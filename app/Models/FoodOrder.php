<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class FoodOrder extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function beverage(){
    //     return $this->belongsTo(Beverage::class);
    // }

    // public function order(){
    //     return $this->belongsTo(Order::class);
    // }

    public static function getData(){
        return DB::table('food_orders')
        ->join('orders', 'food_orders.order_id', '=', 'orders.id')
        ->join('beverages', 'beverages.id', '=', 'food_orders.beverage_id')
        ->join('rooms', 'orders.room_id', '=', 'rooms.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->get();
    }
}
