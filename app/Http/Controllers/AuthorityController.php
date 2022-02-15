<?php

namespace App\Http\Controllers;

use App\Models\Authority;
use App\Models\Business;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorityController extends Controller
{
    public function Viewer()
    {
        $Users = DB::table('users')->paginate(15);

        return view('admin.authority',['Users' => $Users]);
    }

    public function store(Request $request){
        $id = $request->input('id');
        $user = User::find($id);
        if($request->input('authoritys')==null){
            $user->authority_update = 0;
            $user->authority_estimate = 0;
            $user->authority_order = 0;
            $user->save();
        }
        else {
            if (in_array('update', $request->get('authoritys'))) {
                $user->authority_update = 1;
            } else {
                $user->authority_update = 0;
            }
            if (in_array('estimate', $request->get('authoritys'))) {
                $user->authority_estimate = 1;
            } else {
                $user->authority_estimate = 0;
            }
            if (in_array('order', $request->get('authoritys'))) {
                $user->authority_order = 1;
            } else {
                $user->authority_order = 0;
            }
            $user->save();
        }
        return redirect()->route('authority');
    }
}
