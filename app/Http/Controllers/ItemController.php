<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function Viewer()
    {
        $Items = DB::table('items')->paginate(15);

        return view('admin.item',['Items' => $Items]);
    }
}
