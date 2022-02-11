<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index() {
        $data = Business::where('pipeline_id','=','2')->orderBy('id','desc')->simplePaginate(10);
        return view('business', ['datas' => $data]);

    }

    public function store(Request $request)
    {
        $pipeline = new Pipeline;
        $pipeline->name = $request->name;
        $pipeline->save();

        return redirect()->route('pipeline');
    }

    public function update(Request $request) {

        $name = $request->input('name');
        $id = $request->input('id');

        $pipeLineData = Pipeline::find($id);
        $pipeLineData->update(['name' => $name]);

        return redirect()->route('pipeline');
    }

    public function destroy(Request $request) {
        $id = $request->input('id');

        Pipeline::find($id)->delete();

        return redirect()->route('pipeline');
    }
}
