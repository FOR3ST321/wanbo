<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FoodOrder extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function beverage(){
    //     return $this->belongsTo(Beverage::class);
    // }

    public static function food_order(){
        return DB::table('food_orders')
        ->select('food_orders.*')
        ->join('beverages', 'beverages.beverage_id', '=', 'food_orders.beverage_id')
        ->join('orders', 'orders.order_id', '=', 'food_orders.order_id')
        // ->select('beverages.*', 'food_orders.*')
        ->get();
    }

    // public static function order(){
    //     return DB::table('orders')
    //     ->join('food_orders', 'orders.order_id', '=', 'food_orders.order_id')
    //     ->get();
    // }

    // public function order(){
    //     return $this->belongsTo(Order::class);
    // }
}
