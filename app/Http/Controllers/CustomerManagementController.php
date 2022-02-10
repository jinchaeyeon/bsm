<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer_Management;

class CustomerManagementController extends Controller
{
    public function index(Request $request){

        if($request->input('company_name') != null){
            $company_name = $request->input('company_name');    
            $customer = DB::table('business_contact')->where('company_name','=', $company_name)->paginate(20);
            $customer->appends(['company_name' =>$company_name]);
        }
        else if($request->input('ceo_name') != null){
            $ceo_name = $request->input('ceo_name');
            $customer = DB::table('business_contact')->where('ceo_name', '=', $ceo_name)->paginate(20);
            $customer->appends(['customer'=>$customer]);
        }
        else{
            $customer = DB::table('business_contact')->paginate(20);
        }

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

    public function show(Customer_Management $customer){
        return view('customer_management.customer_show', compact('customer'));
    }

    public function update(Request $request){
        $id = $request->input('company_register_number');

        Customer_Management::where('company_register_number', $id)->update([
            'company_register_number'=> $request->input('company_register_number'),
            'company_name' => $request->input('company_name'),
            'ceo_name' => $request->input('ceo_name'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'note' => $request->input('note')
        ]);
        
        return redirect('/customer_management');
    }

    public function destroy(Customer_Management $customer){
        $id = $customer->company_register_number;
        Customer_Management::where('company_register_number',$id)->delete();
        
        return redirect('/customer_management');
    }

}
