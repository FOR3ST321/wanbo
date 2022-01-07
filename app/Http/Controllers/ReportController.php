<?php

namespace App\Http\Controllers;

use App\Models\FoodOrder;
use App\Models\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportSummary(){
        $date = request()->date;
        if($date==null){
            $date = date('Y-m-d');
        }

        $bookingData = Order::getTodayData($date);
        $foodOrderData = FoodOrder::getTodayData($date);

        $totalBookTime=0;
        $warnetRevenue=0;
        $foodRevenue=0;

        foreach($bookingData as $i){
            $totalBookTime += $i->total_time;
            $warnetRevenue += $i->total_price;
        }

        foreach($foodOrderData as $i){
            $foodRevenue += ($i->quantity * $i->price);
        }

        return view('/admin/page/reportSummary', [
            'active' => ['report', true, 'summary'],
            'date' => $date,
            'bookingData' => $bookingData,
            'foodOrderData' => $foodOrderData,
            'summary' => [
                'totalBookTime' => $totalBookTime,
                'warnetRevenue' => $warnetRevenue,
                'foodRevenue' => $foodRevenue
            ],
            'js' => '/admin/js/reportSummary.js'
        ]);
    }

    public function paymentHistory(){
        return view('/admin/page/paymentHistory', [
            'active' => ['report', true, 'payment-history'],
            'orders' => Order::getData()
        ]);
    }
    
    public function orderHistory(){
        return view('/admin/page/orderHistory', [
            'active' => ['report', true, 'order-history'],
            'orders' => Order::getData()
        ]);
    }
}
