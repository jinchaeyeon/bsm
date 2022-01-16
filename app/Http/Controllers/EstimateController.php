<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstimateController extends Controller
{
    public function Viewer()
    {
        return view('Estimate.EstimateViewer');
    }
    
    public function Detail()
    {
        return view('Estimate.EstimateDetail');
    }
}
