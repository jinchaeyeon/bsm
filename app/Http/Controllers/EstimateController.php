<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstimateController extends Controller
{
    public function Viewer()
    {
		$Estimates = DB::table('estimates')->get(); 

        return view('Estimate.EstimateViewer',['Estimates' => $Estimates]);
    }
}
