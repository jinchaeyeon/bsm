<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerManagementController extends Controller
{
    public function Viewer()
    {
        return view('customer_management.customer_list');
    }
}
