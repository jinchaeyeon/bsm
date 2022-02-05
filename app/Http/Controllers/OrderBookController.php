<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\OrderBook;
use App\Models\OrderBook_sales;


class OrderBookController extends Controller
{
   
    public function index(){
        $orderbook = DB::table('order_books')->paginate(10);
        return view('OrderBook.index')->with(compact('orderbook'))->with('link');
    }

    public function search(Request $request){   
        if($request->input('department') != null){
            $link = 'department';
            $department = $request->input('department');    
            $orderbook = DB::table('order_books')->where('department','=', $department)->paginate(10);
            return view('OrderBook.index')->with(compact('orderbook'))->with('link');
        }
        else if($request->input('created_at1') != null && $request->input('created_at2') != null){
            $link = 'created_at';
            $created_at1 = $request->input('created_at1');
            $created_at2 = $request->input('created_at2');
            $orderbook = DB::table('order_books')->where('created_at', '>=', $created_at1)->where('created_at', '=<', $created_at2)->paginate(10);
            return view('OrderBook.index')->with(compact('orderbook'))->with('link');
        }
        else if($request->input('created_at1') != null && $request->input('created_at2') == null){
            $link = 'created_at';
            $created_at1 = $request->input('created_at1');
            $orderbook = DB::table('order_books')->where('created_at', '>=', $created_at1)->paginate(10);
            return view('OrderBook.index')->with(compact('orderbook'))->with('link');
        }
        else if($request->input('created_at1') == null && $request->input('created_at2') != null){
            $link = 'created_at';
            $created_at2 = $request->input('created_at2');
            $orderbook = DB::table('order_books')->where('created_at', '<=', $created_at2)->paginate(10);
            return view('OrderBook.index')->with(compact('orderbook'))->with('link');
        }
        else if($request->input('manager')!= null){
            $link = 'manager';
            $manager = $request->input('manager');
            $orderbook = DB::table('order_books')->where('manager','=', $manager)->paginate(10);
            return view('OrderBook.index')->with(compact('orderbook'))->with('link');
        }
        else if($request->input('customer_name')!= null){
            $link = 'customer_name';
            $customer_name = $request->input('customer_name');
            $orderbook = DB::table('order_books')->where('customer_name','=', $customer_name)->paginate(10);
            return view('OrderBook.index')->with(compact('orderbook'))->with('link');
        }
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
        $orderbook->customer_name = $request->input('customer_name');
        $orderbook->customer_categorize = $request->input('customer_categorize');
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
        $orderbook->c_e_mail = $request->input('c_e_mail');
        $orderbook->c_e_business_num = $request->input('c_e_business_num');
        $orderbook->e_contact_date = $request->input('e_contact_date');
        $orderbook->save();

        $orderbook_sales1->order_book_id = $contract_number+1;
        $orderbook_sales1->text_order = 1;
        $orderbook_sales1->item = $request->input('item1');
        $orderbook_sales1->count = $request->input('count1');
        $orderbook_sales1->per_sales = $request->input('per_sales1');
        $orderbook_sales1->sales = $request->input('sales1');
        $orderbook_sales1->per_buy = $request->input('per_buy1');
        $orderbook_sales1->buy = $request->input('buy1');
        $orderbook_sales1->profit_sales = $request->input('profit_sales1');
        $orderbook_sales1->shop = $request->input('shop1');
        $orderbook_sales1->note = $request->input('note1');
        $orderbook_sales1->information = $request->input('information');
        $orderbook_sales1->total_count = $request->input('total_count');
        $orderbook_sales1->total_sales = $request->input('total_sales');
        $orderbook_sales1->total_buy = $request->input('total_buy');
        $orderbook_sales1->total_profits = $request->input('total_profits');
        $orderbook_sales1->real_time_profit = $request->input('real_time_profit');
        $orderbook_sales1->save();
        
        $orderbook_sales2->order_book_id = $contract_number+1;
        $orderbook_sales2->text_order = 2;
        $orderbook_sales2->item = $request->input('item2');
        $orderbook_sales2->count = $request->input('count2');
        $orderbook_sales2->per_sales = $request->input('per_sales2');
        $orderbook_sales2->sales= $request->input('sales2');
        $orderbook_sales2->per_buy = $request->input('per_buy2');
        $orderbook_sales2->buy = $request->input('buy2');
        $orderbook_sales2->profit_sales = $request->input('profit_sales2');
        $orderbook_sales2->shop = $request->input('shop2');
        $orderbook_sales2->note = $request->input('note2');
        $orderbook_sales2->information = $request->input('information');
        $orderbook_sales2->total_count = $request->input('total_count');
        $orderbook_sales2->total_sales = $request->input('total_sales');
        $orderbook_sales2->total_buy = $request->input('total_buy');
        $orderbook_sales2->total_profits = $request->input('total_profits');
        $orderbook_sales2->real_time_profit = $request->input('real_time_profit');
        $orderbook_sales2->save();
        
        $orderbook_sales3->order_book_id = $contract_number+1;
        $orderbook_sales3->text_order = 3;
        $orderbook_sales3->item = $request->input('item3');
        $orderbook_sales3->count = $request->input('count3');
        $orderbook_sales3->per_sales = $request->input('per_sales3');
        $orderbook_sales3->sales = $request->input('sales3');
        $orderbook_sales3->per_buy = $request->input('per_buy3');
        $orderbook_sales3->buy = $request->input('buy3');
        $orderbook_sales3->profit_sales = $request->input('profit_sales3');
        $orderbook_sales3->shop = $request->input('shop3');
        $orderbook_sales3->note = $request->input('note3');
        $orderbook_sales3->information = $request->input('information');
        $orderbook_sales3->total_count = $request->input('total_count');
        $orderbook_sales3->total_sales = $request->input('total_sales');
        $orderbook_sales3->total_buy = $request->input('total_buy');
        $orderbook_sales3->total_profits = $request->input('total_profits');
        $orderbook_sales3->real_time_profit = $request->input('real_time_profit');
        $orderbook_sales3->save();
        
        $orderbook_sales4->order_book_id = $contract_number+1;
        $orderbook_sales4->text_order = 4;
        $orderbook_sales4->item = $request->input('item4');
        $orderbook_sales4->count = $request->input('count4');
        $orderbook_sales4->per_sales = $request->input('per_sales4');
        $orderbook_sales4->sales = $request->input('sales4');
        $orderbook_sales4->per_buy = $request->input('per_buy4');
        $orderbook_sales4->buy = $request->input('buy4');
        $orderbook_sales4->profit_sales = $request->input('profit_sales4');
        $orderbook_sales4->shop = $request->input('shop4');
        $orderbook_sales4->note = $request->input('note4');
        $orderbook_sales4->information = $request->input('information') ;
        $orderbook_sales4->total_count = $request->input('total_count');
        $orderbook_sales4->total_sales = $request->input('total_sales');
        $orderbook_sales4->total_buy = $request->input('total_buy');
        $orderbook_sales4->total_profits = $request->input('total_profits');
        $orderbook_sales4->real_time_profit = $request->input('real_time_profit');
        $orderbook_sales4->save();
        
        return redirect('/OrderBook');
    } 
 
    public function show(OrderBook $orderbook){
        $order_book_id = $orderbook->contract_number;
        $orderbook_sales = DB::table('order_book_sales')->where('order_book_id', '=', $order_book_id)->get();
        $temp = ['orderbook'=>$orderbook, 'orderbook_sales'=>$orderbook_sales];
        return view('OrderBook.show', compact('temp'));
    }

    public function update(Request $request){
        $id = $request->input('contract_number');

        OrderBook::where('contract_number', $id)->update([
            'customer_name'=> $request->input('customer_name'),
            'department' => $request->input('department'),
            'customer_name' => $request->input('customer_name'),
            'customer_categorize' => $request->input('customer_categorize'),
            'issue_tax_bill' => $request->input('issue_tax_bill'),
            'manager' => $request->input('manager'),
            'm_business_num' => $request->input('m_business_num'),
            'm_business_address' => $request->input('m_business_address'),
            'm_phone' => $request->input('m_phone'),
            'm_mail' => $request->input('m_mail'),
            'signing_date' => $request->input('signing_date'),
            'c_project_subject' => $request->input('c_project_subject'),
            'customer' => $request->input('customer'),
            'c_zip_code' => $request->input('c_zip_code'),
            'c_address' => $request->input('c_address'),
            'c_manager' => $request->input('c_manager'),
            'c_phone' => $request->input('c_phone'),
            'c_mail' => $request->input('c_mail'),
            'c_business_num' => $request->input('c_business_num'),
            'contact_date' => $request->input('contact_date'),
            'c_e_project_subject' => $request->input('c_e_project_subject'),
            'e_customer' => $request->input('e_customer'),
            'c_e_zip_code' => $request->input('c_e_zip_code'),
            'c_e_address' => $request->input('c_e_address'),
            'c_e_manager' => $request->input('c_e_manager'),
            'c_e_phone' => $request->input('c_e_phone'),
            'c_e_mail' => $request->input('c_e_mail'),
            'c_e_business_num' => $request->input('c_e_business_num'),
            'e_contact_date' => $request->input('e_contact_date')
        ]);

        OrderBook_sales::where('order_book_id', $id)->where('text_order', 1)->update([
            'item' =>  $request->input('item1'),
            'count' =>  $request->input('count1'),
            'per_sales' =>  $request->input('per_sales1'),
            'sales' =>  $request->input('sales1'),
            'per_buy' =>  $request->input('per_buy1'),
            'buy' =>  $request->input('buy1'),
            'profit_sales' =>  $request->input('profit_sales1'),
            'shop' =>  $request->input('shop1'),
            'note' =>  $request->input('note1'),
            'information' =>  $request->input('information'),
            'total_count' =>  $request->input('total_count'),
            'total_sales' =>  $request->input('total_sales'),
            'total_buy' =>  $request->input('total_buy'),
            'total_profits' =>  $request->input('total_profits'),
            'real_time_profit' =>  $request->input('real_time_profit')
        ]);

        OrderBook_sales::where('order_book_id', $id)->where('text_order', 2)->update([
            'item' =>  $request->input('item2'),
            'count' =>  $request->input('count2'),
            'per_sales' =>  $request->input('per_sales2'),
            'sales'=>  $request->input('sales2'),
            'per_buy' =>  $request->input('per_buy2'),
            'buy' =>  $request->input('buy2'),
            'profit_sales' =>  $request->input('profit_sales2'),
            'shop' =>  $request->input('shop2'),
            'note' =>  $request->input('note2'),
            'information' =>  $request->input('information'),
            'total_count' =>  $request->input('total_count'),
            'total_sales' =>  $request->input('total_sales'),
            'total_buy' =>  $request->input('total_buy'),
            'total_profits' =>  $request->input('total_profits'),
            'real_time_profit' =>  $request->input('real_time_profit')
        ]);

        OrderBook_sales::where('order_book_id', $id)->where('text_order', 3)->update([
            'item' =>  $request->input('item3'),
            'count' =>  $request->input('count3'),
            'per_sales' =>  $request->input('per_sales3'),
            'sales' =>  $request->input('sales3'),
            'per_buy' =>  $request->input('per_buy3'),
            'buy' =>  $request->input('buy3'),
            'profit_sales' =>  $request->input('profit_sales3'),
            'shop' =>  $request->input('shop3'),
            'note' =>  $request->input('note3'),
            'information' =>  $request->input('information'),
            'total_count' =>  $request->input('total_count'),
            'total_sales' =>  $request->input('total_sales'),
            'total_buy' =>  $request->input('total_buy'),
            'total_profits' =>  $request->input('total_profits'),
            'real_time_profit' =>  $request->input('real_time_profit')
        ]);

        OrderBook_sales::where('order_book_id', $id)->where('text_order', 4)->update([
            'item' =>  $request->input('item4'),
            'count' =>  $request->input('count4'),
            'per_sales' =>  $request->input('per_sales4'),
            'sales' =>  $request->input('sales4'),
            'per_buy' =>  $request->input('per_buy4'),
            'buy' =>  $request->input('buy4'),
            'profit_sales' =>  $request->input('profit_sales4'),
            'shop' =>  $request->input('shop4'),
            'note' =>  $request->input('note4'),
            'information' =>  $request->input('information') ,
            'total_count' =>  $request->input('total_count'),
            'total_sales' =>  $request->input('total_sales'),
            'total_buy' =>  $request->input('total_buy'),
            'total_profits' =>  $request->input('total_profits'),
            'real_time_profit' =>  $request->input('real_time_profit')
        ]);
        
        return redirect('/OrderBook');
    }

    public function destroy(OrderBook $orderbook){
        $id = $orderbook->contract_number;
        OrderBook::where('contract_number',$id)->delete();
        OrderBook_sales::where('order_book_id', $id)->delete();
        
        return redirect('/OrderBook');
    }
}
