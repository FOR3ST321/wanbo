<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportSummary(){
        return view('/admin/page/reportSummary', [
            'active' => ['report', true, 'summary'],
        ]);
    }

    public function paymentHistory(){
        return view('/admin/page/paymentHistory', [
            'active' => ['report', true, 'payment-history'],
        ]);
    }
    
    public function orderHistory(){
        return view('/admin/page/orderHistory', [
            'active' => ['report', true, 'order-history'],
        ]);
    }
}
