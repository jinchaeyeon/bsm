<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBook extends Model
{
    protected $primaryKey = 'contract_number';
    protected $fillable = [
                            'created_at', 'contract_number' ,'department' ,'customer_name' , 
                            'customer_categorize', 'issue_tax_bill', 'manager' , 
                            'm_business_num', 'm_business_address', 'm_phone', 
                            'm_mail', 'signing_date' , 'c_project_subject' ,
                            'customer', 'c_zip_code', 'c_address',
                             'c_manager' , 'c_phone', 'c_mail', 
                             'c_business_num' , 'contact_date', 
                             'c_e_project_subject' , 'e_customer', 'c_e_zip_code', 
                             'c_e_address', 'c_e_manager' , 'c_e_phone ', 
                             'c_mail',  'c_e_business_num' , 'e_contact_date',
                        ];
}
