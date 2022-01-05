<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Beverage extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function getData(){
        return DB::table('beverages')
        ->join('food_orders', 'beverages.id', '=', 'food_orders.beverage_id')
        // ->select('beverages.*', 'food_orders.*')
        ->get();
    }
}
