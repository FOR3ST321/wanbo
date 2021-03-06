<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function getOrderData($in){
        return DB::table('orders')
        ->join('rooms', 'orders.room_id', '=', 'rooms.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->whereIn('orders.status', $in)
        ->orderByDesc('orders.schedule')
        ->paginate(10);
    }

    public static function getUserData($id){
        return DB::table('orders')
        ->join('rooms', 'orders.room_id', '=', 'rooms.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->join('store_branches', 'store_branches.id', '=', 'rooms.store_branch_id')
        ->where('orders.user_id','=',$id)
        ->select(
            'orders.id as orders_id',
            'orders.*',
            'users.*',
            'store_branches.*',
            'rooms.*'
        )
        ->orderByDesc('orders.schedule')
        ->get();
    }

    public static function getTodayData($date){
        return DB::table('orders')
        ->join('rooms', 'orders.room_id', '=', 'rooms.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->where('status', '=', 'done')
        ->where('schedule', 'like', $date.'%')
        ->orderByDesc('checkout')
        ->select('orders.id as orderID','rooms.*', 'users.*', 'orders.*')
        ->get();
    }

    public static function getActiveBilling($date){
        return DB::table('orders')
        ->rightJoin('rooms', function($join) use($date){
            $join->on('orders.room_id', '=', 'rooms.id')
            ->where('orders.status', '=', 'booked')
            ->where('orders.schedule', '<=', $date);
        })
        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
        ->join('packages', 'packages.id', '=', 'rooms.package_id')
        ->select('rooms.id as rooms_id', 'rooms.room_name', 'packages.package_name', 'users.name', 'orders.id as order_id' ,'orders.*')
        ->orderBy('rooms.id')
        ->get();
    }
    
    public static function getAvailableRoom($order_date, $package_id){
        return DB::table('orders')
        ->rightJoin('rooms', function($join) use($order_date){
            $join->on('orders.room_id', '=', 'rooms.id')
            ->whereIn('orders.status', ['booked', 'paid'])
            ->whereBetween('orders.schedule', [date_create(date('Y-m-d')." 00:00:00"), $order_date]);
            // between pertama masih belum bener, soalnya, ngambil di 00:00:00 harusnya liat donetime tiap booking
        })
        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
        ->join('packages', 'packages.id', '=', 'rooms.package_id')
        ->where('packages.id', '=', $package_id)
        ->select('rooms.id as rooms_id', 'rooms.room_name', 'packages.package_name', 'users.name', 'orders.id as order_id' ,'orders.*')
        ->orderBy('rooms.id')
        ->get();
    }

    public static function upcomingBooking($minDate, $maxDate){
        return DB::table('orders')
        ->join('rooms', 'orders.room_id', '=', 'rooms.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->where('status', '=', 'paid')
        ->whereBetween('schedule', [$minDate, $maxDate])
        // ->where('schedule', '>=', $date)
        ->orderBy('schedule')
        ->select('orders.id as order_id', 'orders.*', 'rooms.room_name', 'users.name')
        ->get();
    }

    public static function getBillingDetail($id){
        return DB::table('orders')
        ->join('rooms', 'orders.room_id', '=', 'rooms.id')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->join('store_branches', 'store_branches.id', '=', 'rooms.store_branch_id')
        ->where('orders.id' , '=', $id)
        ->select('orders.id as orders_id', 'orders.*', 'users.*', 'rooms.*', 'store_branches.store_name')
        ->get()->first();
    }
}
