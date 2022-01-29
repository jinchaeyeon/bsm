<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderBook;
use App\Models\OrderBook_sales;

class OrderBookController extends Controller
{
    public function Viewer()
    {
        return view('OrderBook.OrderBookViewer');
    }

    public function Detail()
    {
        return view('/OrderBook/OrderBookDetail');
    }

    public function store(Request $request){
        $orderbook = OrderBook::create([
            'department'=>$request->input('department'),
            'customer_name '=>$request->input('customer_name '),
            'customer_categorize  '=>$request->input('customer_categorize  '),
            'issue_tax_bill'=>$request->input('issue_tax_bill'),
            'manager'=>$request->input('manager'),
            'm_business-num'=>$request->input('m_business-num'),
            'm_business_address'=>$request->input('m_business_address'),
            'm_phone'=>$request->input('m_phone'),
            'm_mail'=>$request->input('m_mail'),
            'signing_date'=>$request->input('signing_date'),
            'pay_due_date'=>$request->input('pay_due_date'),
            'c_project_subject'=>$request->input('c_project_subject'),
            'customer'=>$request->input('customer'),
            'c_zip_code'=>$request->input('c_zip_code'),
            'c_address'=>$request->input('c_address'),
            'c_manager'=>$request->input('c_manager'),
            'c_phone'=>$request->input('c_phone'),
            'c_mail'=>$request->input('c_mail'),
            'c_business-num'=>$request->input('c_business-num'),
            'contact_date -num'=>$request->input('contact_date -num'),
            'c_e_project_subject'=>$request->input('c_e_project_subject'),
            'e_customer'=>$request->input('e_customer'),
            'c_e_zip_code'=>$request->input('c_e_zip_code'),
            'c_e_address'=>$request->input('c_e_address'),
            'c_e_manager'=>$request->input('c_e_manager'),
            'c_e_phone'=>$request->input('c_e_phone'),
            'c-e_mail'=>$request->input('c-e_mail'),
            'c_e_business-num'=>$request->input('c_e_business-num'),
            'e_contact_date'=>$request->input('e_contact_date')
        ]);

        $orderbook_sales = OrderBook_sales::create([
            'item'=>$request->input('item'),
            'count'=>$request->input('count'),
            'per_sales'=>$request->input('per_sales'),
            'total_sales'=>$request->input('total_sales'),
            'per_buy-num'=>$request->input('per_buy-num'),
            'total_buy'=>$request->input('total_buy'),
            'profit_sales'=>$request->input('profit_sales'),
            'shop'=>$request->input('shop'),
            'note'=>$request->input('note'),
            'information'=>$request->input('information'),
        ]);

        return view('/OrderBook/OrderBookDetail');
    } 
 
}
