<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateOrderRequest;

function generateString(){
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 1; $i <= 6; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

function getPrice($room_id, $total_time){
    $data = Room::find($room_id)->first();

    return ($data->package->price_per_hour * ($total_time/60));
}

class OrderController extends Controller
{
    

    public function index()
    {
        $billingData = Order::getActiveBilling(date('Y-m-d H:i:s'));
        $upcomingBilling = Order::upcomingBooking(date('Y-m-d H:i:s'));

        return view('/admin/page/billing/billingMainMenu', [
            'active' => ['billing', false, null],
            'billingData' => $billingData,
            'upcomingBilling' => $upcomingBilling,
            'js' => '/admin/js/billing.js'
        ]);
    }

    public function guestBooking(Request $request){
        $data = [
            'room_id' => $request->room_id,
            'user_id' => 1, //guest
            'status' => 'booked',
            'unique_id' => generateString(),
            'total_price' => getPrice($request->room_id, $request->total_time),
            'total_time' => $request->total_time,
            'schedule' => date('Y-m-d H:i:s'),
            'checkin' => date('Y-m-d H:i:s'),
            'checkout' => null
        ];

        // dump($data);
        Order::create($data);

        Alert::success('Success', 'Order data created successfully!');
        return redirect('/wanboAdmin');
    }

    public function stopBooking(){
        // dump(request()->id);
        Order::where('id', request()->id)->update([
            'status' => 'done',
            'checkout'=> date('Y-m-d H:i:s'),
        ]);

        Alert::success('Success', 'Billing has been stopped!');
        return redirect('/wanboAdmin');
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
