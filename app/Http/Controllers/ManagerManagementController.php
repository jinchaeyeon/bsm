<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerManagementController extends Controller
{
    public function Viewer()
    {
        return view('manager_management.manager_list');
    }
}
