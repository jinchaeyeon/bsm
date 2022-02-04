<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBook_sales extends Model
{
    protected $fillable = [
                            'order_book_id', 'text_order', 'item', 'count' ,
                            'per_sales', 'sales', 'per_buy','buy',
                            'profit_sales', 'shop', 'note', 'information','total_count'
                            ,'total_sales','total_buy','total_profits','real_time_profit'
                        ];
}
