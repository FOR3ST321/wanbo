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
        return redirect('/wanbo/mybooking/'.$request->id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFoodOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodOrder  $foodOrder
     * @return \Illuminate\Http\Response
     */
    public function show(FoodOrder $foodOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodOrder  $foodOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodOrder $foodOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodOrderRequest  $request
     * @param  \App\Models\FoodOrder  $foodOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodOrderRequest $request, FoodOrder $foodOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodOrder  $foodOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodOrder $foodOrder)
    {
        //
    }
}
