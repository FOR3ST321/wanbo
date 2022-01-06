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
Route::get('/wanbo', [FrontEndController::class, 'index'])->name('dashboard');


Route::middleware(['guest'])->group(function () {
    //guest - bisa diakses tanpa auth, kalau udah punya auth gabisa kesini
    Route::get('/wanbo/login', [AuthController::class, 'loginPageUser'])->name('login_user');
    Route::get('/wanboAdmin/login', [AuthController::class, 'loginPageAdmin'])->name('login_admin');

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

    //foodorder
    Route::get('/wanboAdmin', [OrderController::class, 'index']);
    Route::get('/wanboAdmin/foodOrders', [FoodOrderController::class, 'index']);
    Route::put('/wanboAdmin/foodOrders/{foodOrder}', [FoodOrderController::class, 'success']);
    Route::patch('/wanboAdmin/foodOrders/{foodOrder}', [FoodOrderController::class, 'canceled']);
    Route::get('/wanboAdmin/foodOrderHistory', [FoodOrderController::class, 'index2']);
    
    //beverage
    Route::resource('/wanboAdmin/beverages', BeverageController::class);


    //report
    Route::get('/wanboAdmin/reportSummary', [ReportController::class, 'reportSummary']);
    Route::get('/wanboAdmin/paymentHistory', [ReportController::class, 'paymentHistory']);
    Route::get('/wanboAdmin/orderHistory', [ReportController::class, 'orderHistory']);
});

Route::middleware(['is_user'])->group(function () {
    //admin - buat wanbo user
    Route::get('/wanbo/profile', [FrontEndController::class, 'profile'])->middleware('is_user');
    Route::get('/wanbo/logout', [AuthController::class, 'logoutUser']);
});
