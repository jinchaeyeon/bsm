<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Builder;

class BusinessController extends Controller
{
    public function index() {
        $data = Business::where('pipeline_id','=','2')->orderBy('id','desc')->simplePaginate(10);
        return view('business', ['datas' => $data]);

    }

    public function store(Request $request)
    {
        $business = new Business;
        $business->contact_id = $request->contact_id;
        $business->pipeline_id = $request->pipeline_id;
        $business->client = $request->client;
        $business->name = $request->name;
        $business->expected_sales = $request->expected_sales;
        $business->expected_purchase = $request->expected_purchase;
        $business->expected_sales_profit = $request->expected_sales_profit;
        $business->expected_issue_month = $request->expected_issue_month;
        $business->progress_rate = $request->progress_rate;
        $business->progress = $request->progress;
        $business->sales_person = $request->sales_person;
        $business->save();

        return redirect()->route('business');
    }

    public function update(Request $request) {
        $id = $request->input('id');

        $business = Business::find($id);
        $business->client = $request->client;
        $business->name = $request->name;
        $business->expected_sales = $request->expected_sales;
        $business->expected_purchase = $request->expected_purchase;
        $business->expected_sales_profit = $request->expected_sales_profit;
        $business->expected_issue_month = $request->expected_issue_month;
        $business->progress_rate = $request->progress_rate;
        $business->progress = $request->progress;
        $business->sales_person = $request->sales_person;
        $business->save();

        return redirect()->route('business');
    }

    public function destroy(Business $business) {
        $business->delete();

        return redirect()->route('business');
    }
}
