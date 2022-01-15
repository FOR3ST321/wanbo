<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BackEndController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BeverageController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\FoodOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//bisa dibuka sama semua
Route::get('/', function () {
    return redirect('/wanbo'); //temporary, selagi belum bikin login auth
});


Route::middleware(['guest'])->group(function () {
    //guest - bisa diakses tanpa auth, kalau udah punya auth gabisa kesini
    Route::get('/wanbo/login', [AuthController::class, 'loginPageUser']);
    Route::post('/wanbo/register', [AuthController::class, 'registerUser']);
    Route::get('/wanbo/register', [AuthController::class, 'registerPageUser']);
    Route::get('/wanboAdmin/login', [AuthController::class, 'loginPageAdmin'])->name('login_admin');
    Route::get('/wanbo', [FrontEndController::class, 'index'])->name('home');

    //auth
    Route::post('/wanboAdmin/auth', [AuthController::class, 'authenticate']);
    Route::post('/wanbo/auth', [AuthController::class, 'authenticateUser']);
});

Route::middleware(['is_admin'])->group(function () {
    //admin - buat wanbo admin

    Route::get('/wanboAdmin/logout', [AuthController::class, 'logoutAdmin']);
    
    //backend
    Route::get('/wanboAdmin/account/{account:id}', [BackEndController::class, 'profile']);
    Route::post('/wanboAdmin/account/{account:id}', [BackEndController::class, 'updateProfile']);
    Route::match(array('get','post'), '/wanboAdmin/account/{account:id}/edit', [BackEndController::class, 'editProfile']);
    Route::get('/wanboAdmin/store_branch/{store_branch:id}/edit', [BackEndController::class, 'branch']);
    Route::post('/wanboAdmin/store_branch/{store_branch:id}', [BackEndController::class, 'updateBranch']);

    //package
    Route::resource('/wanboAdmin/packages', PackageController::class);
    Route::resource('/wanboAdmin/rooms', RoomController::class);

    //billing
    Route::get('/wanboAdmin', [OrderController::class, 'index']);
    Route::get('/wanboAdmin/detailBilling/{id}', [OrderController::class, 'detailBilling']);
    Route::post('/wanboAdmin/guestBooking', [OrderController::class, 'guestBooking']);
    Route::post('/wanboAdmin/billing/{id}', [OrderController::class, 'stopBooking']);
    
    
    //foodorder
    Route::get('/wanboAdmin/foodOrders', [FoodOrderController::class, 'index']);
    Route::put('/wanboAdmin/foodOrders/{foodOrder}', [FoodOrderController::class, 'success']);
    Route::patch('/wanboAdmin/foodOrders/{foodOrder}', [FoodOrderController::class, 'canceled']);
    Route::get('/wanboAdmin/foodOrderHistory', [FoodOrderController::class, 'foodOrderHistory']);
    
    //beverage
    Route::resource('/wanboAdmin/beverages', BeverageController::class);


    //report
    Route::get('/wanboAdmin/reportSummary', [ReportController::class, 'reportSummary']);
    Route::get('/wanboAdmin/paymentHistory', [ReportController::class, 'paymentHistory']);
    Route::get('/wanboAdmin/orderHistory', [ReportController::class, 'orderHistory']);
});

Route::middleware(['is_user'])->group(function () {
    //buat wanbo user
    Route::get('/wanbo/dashboard', [FrontEndController::class, 'dashboard'])->name('dashboard');
    Route::post('/wanbo/dashboard/branch', [FrontEndController::class, 'dashboardBranch'])->name('dashboardBranch');
    Route::get('/wanbo/dashboard/warnet', [FrontEndController::class, 'dashboardWarnet'])->name('warnet');
    Route::get('/wanbo/profile', [FrontEndController::class, 'profile'])->middleware('is_user');
    Route::get('/wanbo/users/{user}/edit', [FrontEndController::class, 'editProfile']);
    Route::match(array('get','post'),'/wanbo/accounts/{account}/edit', [FrontEndController::class, 'editPass']);
    Route::post('/wanbo/accounts/{account}', [FrontEndController::class, 'updatePass']);
    Route::post('/wanbo/users/{user}', [FrontEndController::class, 'updateProfile']);
    Route::get('/wanbo/logout', [AuthController::class, 'logoutUser']);
    Route::get('/wanbo/package/{package}', [FrontEndController::class, 'package']);

    //booking
    Route::get('/wanbo/reserve', [OrderController::class, 'reserve']);
    Route::get('/wanbo/order/rooms', [OrderController::class, 'bookRoom']);
    Route::post('/wanbo/createOrder', [OrderController::class, 'createOrder']);

    Route::get('/wanbo/mybooking', [OrderController::class, 'mybooking']);
    Route::get('/wanbo/mybooking/{id}', [OrderController::class, 'mybookingDetail']);
    Route::post('wanbo/cancelbooking/{id}', [OrderController::class, 'cancelBooking']);
    Route::post('wanbo/checkin/{id}', [OrderController::class, 'checkinBooking']);
    Route::post('/wanbo/checkout/{id}', [OrderController::class, 'checkoutBooking']);
    Route::post('/wanbo/orderfood/{id}', [FoodOrderController::class, 'createOrderFood']);
    
});
