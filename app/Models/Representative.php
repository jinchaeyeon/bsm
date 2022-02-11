<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    protected $table ='Users';
    protected $fillable = [
        'contact_id', 'manager_name', 'rank', 'division', 'contact', 'email'
    ];

}
