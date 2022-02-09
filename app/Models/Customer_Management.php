<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_Management extends Model
{
    protected $table ='business_contact'; 
    protected $primaryKey = 'company_register_number';
    protected $fillable = [
                            'created_at', 'company_register_number' ,'company_name' ,'ceo_name', 
                            'address','phone', 'note', 'updated_at'
    ];
}
