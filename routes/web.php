<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\OrderBookController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ManagerManagementController;
use App\Http\Controllers\CustomerManagementController;

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

// 채연 
Route::get('/Estimate', [EstimateController::class, 'Viewer']);
Route::get('/EstimateDetail', [EstimateController::class, 'Detail']);

Route::get('/OrderBook', [OrderBookController::class, 'Viewer']);   // 수주 품위서 
Route::get('/OrderBookDetail', [OrderBookController::class, 'Detail']);


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


