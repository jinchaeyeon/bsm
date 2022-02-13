<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepresentativeController extends Controller
{
    public function Viewer()
    {
        $Users = DB::table('users')->paginate(15);

        return view('admin.representative',['Users' => $Users]);
    }

    public function store(Request $request)
    {
        $Users = new User;
        $Users->id = $request->id;
        $Users->contact_id = $request->contact_id;
        $Users->manager_name = $request->manager_name;
        $Users->rank = $request->rank;
        $Users->division = $request->division;
        $Users->contact = $request->contact;
        $Users->email = $request->email;
        $Users->save();


        return redirect()->route('representative');
    }
}
