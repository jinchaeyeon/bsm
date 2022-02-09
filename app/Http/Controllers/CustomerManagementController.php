<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer_Management;

class CustomerManagementController extends Controller
{
    public function index(Request $request){
   
        $customer = DB::table('business_contact')->paginate(10);
        return view('customer_management.customer_list', compact('customer'));
    }

    public function store(Request $request){
        $Customer_Management = new Customer_Management;

        $Customer_Management->company_register_number = $request->input('company_register_number');
        $Customer_Management->company_name = $request->input('company_name');
        $Customer_Management->ceo_name = $request->input('ceo_name');
        $Customer_Management->address = $request->input('address');
        $Customer_Management->phone = $request->input('phone');
        $Customer_Management->note = $request->input('note');
        $Customer_Management->save();

        return redirect('/customer_management');
    } 
}
