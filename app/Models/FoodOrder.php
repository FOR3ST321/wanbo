<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        ->select('beverages.*', 'orders.*', 'food_orders.*')
        ->get();
    }
}
