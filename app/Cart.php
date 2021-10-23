<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        
        'catagory_id',
        'product_id',
        'quantity',
        'user_ip'
        
    ];
}
