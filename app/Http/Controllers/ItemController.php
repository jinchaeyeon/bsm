<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function Viewer()
    {
        $Items = DB::table('items')->paginate(15);

        return view('admin.item',['Items' => $Items]);
    }


    public function store(Request $request)
    {
        $items = new Item;
        $items->id = $request->id;
        $items->name = $request->name;
        $items->standard_unit_price = $request->standard_unit_price;
        $items->note = $request->note;
        $items->save();

        return redirect()->route('item');
    }
}
