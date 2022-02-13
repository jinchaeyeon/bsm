<?php

namespace App\Http\Controllers;

use App\Models\Estimate;
use App\Models\Business;
use App\Models\OrderBook;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request) {
        $estimate = Estimate::orderBy('update_date')->take(5)->get();
        $business = Business::orderBy('updated_at')->take(5)->get();
        $order = OrderBook::orderBy('updated_at')->take(5)->get();
        return view('main', ['Estimates' => $estimate, 'business' => $business, 'order' => $order]);
    }
}
