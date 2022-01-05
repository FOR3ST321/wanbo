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
Route::get('/wanbo', [FrontEndController::class, 'index']);


Route::middleware(['guest'])->group(function () {
    //guest - bisa diakses tanpa auth, kalau udah punya auth gabisa kesini
    Route::get('/wanbo/login', [AuthController::class, 'loginPageUser']);
    Route::get('/wanboAdmin/login', [AuthController::class, 'loginPageAdmin']);

    //auth
    Route::post('/wanboAdmin/auth', [AuthController::class, 'authenticate']);
});

Route::middleware(['is_admin'])->group(function () {
    //admin - buat wanbo admin

    Route::get('/wanboAdmin/logout', [AuthController::class, 'logoutAdmin']);
    

    // Route::get('/wanboAdmin/packages', [PackageController::class, 'index']);
    // Route::get('/wanboAdmin/foodList', [BeverageController::class, 'index']);
    Route::resource('/wanboAdmin/packages', PackageController::class);
    Route::resource('/wanboAdmin/rooms', RoomController::class);

    Route::get('/wanboAdmin', [OrderController::class, 'index']);
    // Route::get('/wanboAdmin/packages', [PackageController::class, 'index']);
    // Route::get('/wanboAdmin/foodList', [BeverageController::class, 'index']);
    Route::get('/wanboAdmin/foodOrder', [FoodOrderController::class, 'index']);
    Route::resource('/wanboAdmin/beverages', BeverageController::class);

    Route::get('/wanboAdmin/reportSummary', [ReportController::class, 'reportSummary']);
    Route::get('/wanboAdmin/paymentHistory', [ReportController::class, 'paymentHistory']);
    Route::get('/wanboAdmin/orderHistory', [ReportController::class, 'orderHistory']);
});

Route::middleware(['is_user'])->group(function () {
    //admin - buat wanbo user
    Route::get('/wanbo/profile', [FrontEndController::class, 'profile'])->middleware('is_user');;
});
