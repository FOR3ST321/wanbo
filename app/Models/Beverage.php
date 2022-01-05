<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Beverage extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function food_orders(){
        return DB::table('food_orders')
        ->join('food_orders', 'beverages.beverage_id', '=', 'food_orders.beverage_id')
        ->select('beverages.*', 'food_orders.*')
        ->get();
    }
}
