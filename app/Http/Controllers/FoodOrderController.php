<?php

namespace App\Http\Controllers;

use App\Models\FoodOrder;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreFoodOrderRequest;
use App\Http\Requests\UpdateFoodOrderRequest;

class FoodOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/page/foodOrder/foodOrderMainMenu', [
            'active' => ['food-order-list', false, null],
            'food_orders' => FoodOrder::getData(),
            'js' => "/admin/js/foodOrder.js"
        ]);
    }

    public function foodOrderHistory()
    {
        return view('/admin/page/foodOrder/foodOrderHistory', [
            'active' => ['report',true, 'food-order-history'],
            'food_orders' => FoodOrder::getData('!=')
        ]);
    }

    public function success(FoodOrder $foodOrder)
    {
        FoodOrder::where('id', $foodOrder->id)->update(['food_status'=>'success']);
        Alert::success('Congrats', 'Food order accepted!'); //sweetalert laravel
        // return view('/admin/page/foodOrder/foodOrderMainMenu', [
        //     'active' => ['food-order-list', false, null],
        //     'food_orders' => FoodOrder::getData()
        // ]);
        return redirect('/wanboAdmin/foodOrders');
    }

    public function canceled(FoodOrder $foodOrder)
    {
        FoodOrder::where('id', $foodOrder->id)->update(['food_status'=>'canceled']);
        Alert::success('Info', 'Food order Rejected!'); //sweetalert laravel
        // return view('/admin/page/foodOrder/foodOrderMainMenu', [
        //     'active' => ['food-order-list', false, null],
        //     'food_orders' => FoodOrder::getData()
        // ]);
        return redirect('/wanboAdmin/foodOrders');
    }

    public function createOrderFood(Request $request){
        $data = [
            'order_id' => $request->id,
            'beverage_id' => $request->beverage_id,
            'quantity' => $request->qty,
            'food_status' => 'pending'
        ];

        // dump($data);
        FoodOrder::create($data);
        return redirect('/wanbo/mybooking/'.$request->id)->with('success', 'Your food order successfully created!');
    }
}
