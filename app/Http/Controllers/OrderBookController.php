<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OrderBook;
use App\Models\OrderBook_sales;


class OrderBookController extends Controller
{
   
    public function index(){
        return view('OrderBook.index');
    }

    public function create(){
        $contract_number = OrderBook::all()->max('contract_number');
        return view('OrderBook.create',compact('contract_number'));
    }

    public function store(Request $request){
        $contract_number = OrderBook::all()->max('contract_number');
        $orderbook = new OrderBook;
        $orderbook_sales1 = new OrderBook_sales;
        $orderbook_sales2 = new OrderBook_sales;
        $orderbook_sales3 = new OrderBook_sales;
        $orderbook_sales4 = new OrderBook_sales;

        $orderbook->department = $request->input('department');
        $orderbook->customer_name = $request->input('customer_name ');
        $orderbook->customer_categorize = $request->input('customer_categorize  ');
        $orderbook->issue_tax_bill = $request->input('issue_tax_bill');
        $orderbook->manager = $request->input('manager');
        $orderbook->m_business_num = $request->input('m_business_num');
        $orderbook->m_business_address = $request->input('m_business_address');
        $orderbook->m_phone = $request->input('m_phone');
        $orderbook->m_mail = $request->input('m_mail');
        $orderbook->signing_date = $request->input('signing_date');
        $orderbook->c_project_subject = $request->input('c_project_subject');
        $orderbook->customer = $request->input('customer');
        $orderbook->c_zip_code = $request->input('c_zip_code');
        $orderbook->c_address = $request->input('c_address');
        $orderbook->c_manager = $request->input('c_manager');
        $orderbook->c_phone = $request->input('c_phone');
        $orderbook->c_mail = $request->input('c_mail');
        $orderbook->c_business_num = $request->input('c_business_num');
        $orderbook->contact_date = $request->input('contact_date');
        $orderbook->c_e_project_subject = $request->input('c_e_project_subject');
        $orderbook->e_customer = $request->input('e_customer');
        $orderbook->c_e_zip_code = $request->input('c_e_zip_code');
        $orderbook->c_e_address = $request->input('c_e_address');
        $orderbook->c_e_manager = $request->input('c_e_manager');
        $orderbook->c_e_phone = $request->input('c_e_phone');
        $orderbook->c_e_mail = $request->input('c-e_mail');
        $orderbook->c_e_business_num = $request->input('c_e_business_num');
        $orderbook->e_contact_date = $request->input('e_contact_date');
        $orderbook->save();

        $orderbook_sales1->order_book_id = $contract_number+1;
        $orderbook_sales1->item = $request->input('item');
        $orderbook_sales1->count = $request->input('count');
        $orderbook_sales1->per_sales = $request->input('per_sales');
        $orderbook_sales1->total_sales = $request->input('total_sales');
        $orderbook_sales1->per_buy = $request->input('per_buy');
        $orderbook_sales1->total_buy = $request->input('total_buy');
        $orderbook_sales1->profit_sales = $request->input('profit_sales');
        $orderbook_sales1->shop = $request->input('shop');
        $orderbook_sales1->note = $request->input('note');
        $orderbook_sales1->information = $request->input('information');
        $orderbook_sales1->save();
        
        $orderbook_sales2->order_book_id = $contract_number+1;
        $orderbook_sales2->item = $request->input('item');
        $orderbook_sales2->count = $request->input('count');
        $orderbook_sales2->per_sales = $request->input('per_sales');
        $orderbook_sales2->total_sales= $request->input('total_sales');
        $orderbook_sales2->per_buy = $request->input('per_buy');
        $orderbook_sales2->total_buy = $request->input('total_buy');
        $orderbook_sales2->profit_sales = $request->input('profit_sales');
        $orderbook_sales2->shop = $request->input('shop');
        $orderbook_sales2->note = $request->input('note');
        $orderbook_sales2->information = $request->input('information');
        $orderbook_sales2->save();
        
        $orderbook_sales3->order_book_id = $contract_number+1;
        $orderbook_sales3->item = $request->input('item');
        $orderbook_sales3->count = $request->input('count');
        $orderbook_sales3->per_sales = $request->input('per_sales');
        $orderbook_sales3->total_sales = $request->input('total_sales');
        $orderbook_sales3->per_buy = $request->input('per_buy');
        $orderbook_sales3->total_buy = $request->input('total_buy');
        $orderbook_sales3->profit_sales = $request->input('profit_sales');
        $orderbook_sales3->shop = $request->input('shop');
        $orderbook_sales3->note = $request->input('note');
        $orderbook_sales3->information = $request->input('information');
        $orderbook_sales3->save();
        
        $orderbook_sales4->order_book_id = $contract_number+1;
        $orderbook_sales4->item = $request->input('item');
        $orderbook_sales4->count = $request->input('count');
        $orderbook_sales4->per_sales = $request->input('per_sales');
        $orderbook_sales4->total_sales = $request->input('total_sales');
        $orderbook_sales4->per_buy = $request->input('per_buy');
        $orderbook_sales4->total_buy = $request->input('total_buy');
        $orderbook_sales4->profit_sales = $request->input('profit_sales');
        $orderbook_sales4->shop = $request->input('shop');
        $orderbook_sales4->note = $request->input('note');
        $orderbook_sales4->information = $request->input('information') ;
        $orderbook_sales4->save();
        
        return redirect('/OrderBook');
    } 
 
}
