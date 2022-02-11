<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorityController extends Controller
{
    public function Viewer()
    {
        $Authoritys = DB::table('users')->paginate(15);

        return view('admin.authority',['Authoritys' => $Authoritys]);
    }
}
