<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function Viewer()
    {
        return view('Statistics.StatisticsViewer');
    }
}
