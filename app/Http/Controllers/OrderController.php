<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Room;
use App\Models\Order;
use App\Models\Package;
use App\Models\Beverage;
use App\Models\FoodOrder;
use App\Models\StoreBranch;
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
        $upcomingBilling = Order::upcomingBooking(date('Y-m-d H:i:s'), date('Y-m-d 23:59:59'));

        return view('/admin/page/billing/billingMainMenu', [
            'active' => ['billing', false, null],
            'billingData' => $billingData,
            'upcomingBilling' => $upcomingBilling,
            'js' => '/admin/js/billing.js'
        ]);
    }

    public function detailBilling(Request $request){
        // dump($request->id);
        $billingData = Order::getBillingDetail($request->id);
        $foodOrderData = FoodOrder::getAllFoodOrder($request->id);
        // dump($foodOrderData);

        return view('/admin/page/billing/showBillingDetail', [
            'active' => ['billing', false, null],
            'billingData' => $billingData,
            'foodOrderData' => $foodOrderData,
        ]);
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


    //frontend
    public function reserve(Request $request){
        return view('/frontend/page/booking/reserveMainMenu', [
            'active' => 'reserve',
            'packages' => StoreBranch::getPackageInBranch($request->id),
            'js' => '/frontend/js/booking.js',
            'branches' => StoreBranch::all(),
            'branch_id' => $request->id
        ]);
    }

    public function bookRoom(Request $request){
        //timestamp = jarak cek query dari hari ini(sementara) sampai dengan jam selesai orderan yang dipilih
        $timestamp = date_create($request->tanggal_order." ".$request->jam_order.":00");
        $doneTime = $timestamp;
        $doneTime->modify("+$request->total_time minutes");
        // dump($doneTime);
        $room = Order::getAvailableRoom($doneTime, $request->package_id);
        // dump($room);
        return view('/frontend/page/booking/pickRooms', [
            'prevData' => $request,
            'package' => Package::getPackageById($request->package_id),
            'availableRooms' => $room,
            'active' => 'reserve',
            'js' => '/frontend/js/booking.js'
        ]);
    }

    public function mybooking(){
        $allBooking = Order::getUserData(auth()->user()->id);
        $categoryBooking = [
            'upcoming' => [],
            'done' => [],
            'ongoing' => [],
        ];

        foreach($allBooking as $a){
            switch($a->status){
                case 'paid':
                    array_push($categoryBooking['upcoming'], $a);
                    break;
                case 'booked':
                    array_push($categoryBooking['ongoing'], $a);
                    break;
                default :
                    array_push($categoryBooking['done'], $a);
                    break;
            }
        }

        // dump($categoryBooking);

        return view('/frontend/page/booking/mybookingMainMenu', [
            'active' => 'mybooking',
            'booking' => $categoryBooking,
            'emptyOrder' => count($allBooking) == 0 ? true : false,
            'js' => '/frontend/js/booking.js'
        ]);
    }

    public function mybookingDetail(Request $request){
        // dump($request->id);
        return view('/frontend/page/booking/mybookingDetail', [
            'active' => 'mybooking',
            'bookDetail' => Order::getBillingDetail($request->id),
            'foodList' => Beverage::all(),
            'foodOrderList' => FoodOrder::getAllFoodOrder($request->id),
            'js' => '/frontend/js/booking.js'
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

    public function createOrder(Request $request){
        $data = [
            'room_id' => $request->selected_room,
            'user_id' =>auth()->user()->id,
            'status' => 'paid',
            'unique_id' => generateString(),
            'total_price' => $request->total_price,
            'total_time' => $request->total_time,
            'schedule' => $request->schedule,
            'checkin' => null,
            'checkout' => null
        ];

        // dump($data);
        Order::create($data);

        // Alert::success('Success', 'Order data created successfully!');
        return redirect('/wanbo/mybooking');
    }

    public function cancelBooking(){
        // dump(request()->id);
        Order::where('id', request()->id)->update([
            'status' => 'canceled',
        ]);

        return redirect('/wanbo/mybooking');
    }

    public function checkinBooking(){
        Order::where('id', request()->id)->update([
            'status' => 'booked',
            'checkin' => date('Y-m-d H:i:s')
        ]);

        return redirect('/wanbo/mybooking');
    }

    public function checkoutBooking(){
        Order::where('id', request()->id)->update([
            'status' => 'done',
            'checkout' => date('Y-m-d H:i:s')
        ]);

        return redirect('/wanbo/mybooking');
    }
}
