<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    public static function getData(){
        return DB::table('orders')
        ->join('rooms', 'orders.room_id', '=', 'rooms.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->orderBy('status', 'asc')
        ->get();
    }

    public static function getTodayData($date){
        return DB::table('orders')
        ->join('rooms', 'orders.room_id', '=', 'rooms.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->where('status', '=', 'done')
        ->where('schedule', 'like', $date.'%')
        ->orderBy('checkout')
        ->get();
    }
}
