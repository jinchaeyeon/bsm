<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\OrderBookController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ManagerManagementController;
use App\Http\Controllers\CustomerManagementController;


// 채연 
Route::get('/Estimate', [EstimateController::class, 'Viewer']);
Route::get('/EstimateDetail', [EstimateController::class, 'Detail']);

// 수주품의서
Route::get('/OrderBook', [OrderBookController::class, 'index']); // 등록 
Route::POST('/OrderBook', [OrderBookController::class, 'index']);
Route::get('/OrderBook/create', [OrderBookController::class, 'create']);
Route::POST('/OrderBook/create', [OrderBookController::class, 'store']);
Route::get('/OrderBook/{orderbook}', [OrderBookController::class, 'show']);
Route::post('/OrderBook/{orderbook}', [OrderBookController::class, 'update']);
Route::delete('/OrderBook/{orderbook}', [OrderBookController::class, 'destroy']);  

Route::get('/Statistics', [StatisticsController::class, 'Viewer']);

// 기범
Route::get('/representative', function () {
    return view('admin/representative');
});

Route::get('/item', function () {
    return view('admin/item');
});

Route::get('/authority', function () {
    return view('admin/authority');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 준재 
Route::get('/pipeline', function () {
    return view('pipe');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/', function () {
    return view('main');
});


// 현준
Route::get('/customer_management',[CustomerManagementController::class, 'Viewer']);
Route::get('/manager_management', [ManagerManagementController::class, 'Viewer']);


