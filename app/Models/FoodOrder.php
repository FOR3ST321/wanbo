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

    public static function getData($mode = '='){
        //mode gunanya buat switch pending / bukan pending yang ditampilin, karena dipakai di 2 function controller

        return DB::table('food_orders')
        ->join('orders', 'food_orders.order_id', '=', 'orders.id')
        ->join('beverages', 'beverages.id', '=', 'food_orders.beverage_id')
        ->join('rooms', 'orders.room_id', '=', 'rooms.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->where('food_orders.food_status' , $mode, 'pending')
        ->select('food_orders.*', 'users.name', 'beverages.beverage_name', 'beverages.type', 'beverages.price' ,'rooms.room_name')
        ->orderByDesc('food_orders.updated_at')
        ->get();
    }

    public static function getTodayData($date){
        return DB::table('food_orders')
        ->join('orders', 'food_orders.order_id', '=', 'orders.id')
        ->join('beverages', 'beverages.id', '=', 'food_orders.beverage_id')
        ->join('rooms', 'orders.room_id', '=', 'rooms.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->select('food_orders.*', 'users.name', 'beverages.beverage_name', 'beverages.price' ,'rooms.room_name')
        ->where('food_orders.updated_at', 'like', $date.'%')
        ->where('food_orders.food_status', '=', 'success')
        ->orderBy('food_orders.updated_at')
        ->get();
    }

    public static function getAllFoodOrder($id){
        return DB::table('food_orders')
        ->join('beverages', 'beverages.id', '=', 'food_orders.beverage_id')
        ->where('food_orders.order_id', '=', $id)->get();
    }
}
