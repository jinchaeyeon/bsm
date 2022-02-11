<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'business';

    public function contact(){
        return $this->belongsTo('App\Models\Customer','contact_id', 'company_register_number');
    }
}
