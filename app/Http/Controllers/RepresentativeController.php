<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepresentativeController extends Controller
{
    public function Viewer()
    {
        $Users = DB::table('users')->paginate(15);

        return view('admin.representative',['Users' => $Users]);
    }
}
