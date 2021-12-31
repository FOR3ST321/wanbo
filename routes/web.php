<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BeverageController;
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

Route::get('/', function () {
    return redirect('/wanboAdmin'); //temporary, selagi belum bikin login auth
});

Route::get('/wanboAdmin', [OrderController::class, 'index']);
Route::get('/wanboAdmin/packages', [PackageController::class, 'index']);
Route::get('/wanboAdmin/foodList', [BeverageController::class, 'index']);
Route::get('/wanboAdmin/foodOrder', [FoodOrderController::class, 'index']);

Route::get('/wanboAdmin/reportSummary', [ReportController::class, 'reportSummary']);
Route::get('/wanboAdmin/paymentHistory', [ReportController::class, 'paymentHistory']);
Route::get('/wanboAdmin/orderHistory', [ReportController::class, 'orderHistory']);
