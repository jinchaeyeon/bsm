<?php

namespace App\Http\Controllers;

use App\Models\Pipeline;
use Illuminate\Http\Request;

class PipeController extends Controller
{
    public function index() {
        $td = Pipeline::all();
        return view('pipe', ['td' => $td]);
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
