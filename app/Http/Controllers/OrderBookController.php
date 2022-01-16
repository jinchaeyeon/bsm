<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderBookController extends Controller
{
    public function Viewer()
    {
        return view('OrderBook.OrderBookViewer');
    }
    
    public function Register()
    {
        return view('OrderBook.OrderBookRegister');
    }
    public function Detail()
    {
        return view('OrderBook.OrderBookDetail');
    }
    public function Correction()
    {
        return view('OrderBook.OrderBookCorrection');
    }
}
