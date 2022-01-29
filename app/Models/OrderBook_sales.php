<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBook_sales extends Model
{
    protected $fillable = [
                            'order_book_id', 'item', 'count' ,
                            'per_sales', 'total_sales', 'per_buy','total_buy',
                            'profit_sales', 'shop', 'note', 'information'
                        ];
}
