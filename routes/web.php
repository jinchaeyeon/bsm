<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RepresentativeController;
use App\Http\Controllers\OrderBookController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ManagerManagementController;
use App\Http\Controllers\CustomerManagementController;


// 채연
Route::get('/Estimate', [EstimateController::class, 'Viewer']);

Route::get('/EstimateSearch1/{search1}', function ($search1) {
    $Estimates = DB::table("estimates")->where("department",$search1)->get();

    return view('Estimate.EstimateViewer',['Estimates' => $Estimates]);
});
Route::get('/EstimateSearch2/{start}', function ($start) {
    $Estimates = DB::select('select * from estimates where create_date > ?', [$start]);

    return view('Estimate.EstimateViewer',['Estimates' => $Estimates]);
});
Route::get('/EstimateSearch3/{search3}', function ($search3) {
    $Estimates = DB::table("estimates")->where("sales_person",$search3)->get();

    return view('Estimate.EstimateViewer',['Estimates' => $Estimates]);
});
Route::get('/EstimateSearch4/{search4}', function ($search4) {
    $Estimates = DB::table("estimates")->where("contact_id",$search4)->get();

    return view('Estimate.EstimateViewer',['Estimates' => $Estimates]);
});
Route::get('/EstimateDetail/{SecondRow}', function ($SecondRow) {
    $Estimates = DB::select('select users.email, users.contact, estimates.* from users,estimates where estimates.id = ? and users.manager_name = estimates.sales_person', [$SecondRow]);
    $items = DB::select('SELECT items.name, items.explanation, estimate_items.quantity,items.standard_unit_price, estimate_items.suggested_unit_price, estimate_items.total_offer_price FROM estimate_items, items where estimate_id = ? and estimate_items.item_id = items.id', [$SecondRow]);
    $total = DB::select('SELECT sum(estimate_items.total_offer_price) as total FROM estimate_items, items where estimate_id = ? and estimate_items.item_id = items.id', [$SecondRow]);
    $tax_total = DB::select('SELECT sum(estimate_items.price_include_tax) as tax_total FROM estimate_items, items where estimate_id = ? and estimate_items.item_id = items.id', [$SecondRow]);
    return view('Estimate.EstimateDetail',['Estimates' => $Estimates, 'items' => $items, 'total'=>$total, 'tax_total'=> $tax_total]);
});

Route::get('/OrderBook', [OrderBookController::class, 'index']); // 등록
Route::POST('/OrderBook', [OrderBookController::class, 'index']);
Route::get('/OrderBook/create', [OrderBookController::class, 'create']);
Route::POST('/OrderBook/create', [OrderBookController::class, 'store']);
Route::post('/OrderBook/{orderbook}', [OrderBookController::class, 'update']);
Route::delete('/OrderBook/{orderbook}', [OrderBookController::class, 'destroy']);
Route::get('/OrderBook/{orderbook}', [OrderBookController::class, 'show']);

Route::get('/Statistics', [StatisticsController::class, 'Viewer']);

// 기범
Route::get('/representative', [RepresentativeController::class, 'Viewer']);

Route::get('/item', [ItemController::class, 'Viewer']);


Route::get('/authority', function () {
    return view('admin/authority');
});

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

// 고객관리
Route::get('/customer_management',[CustomerManagementController::class, 'index']);
Route::POST('/customer_management', [CustomerManagementController::class, 'store']);
Route::post('/OrderBook/{orderbook}', [OrderBookController::class, 'update']);
Route::delete('/OrderBook/{orderbook}', [OrderBookController::class, 'destroy']);

//거래처 관리
Route::get('/manager_management', [ManagerManagementController::class, 'Viewer']);


