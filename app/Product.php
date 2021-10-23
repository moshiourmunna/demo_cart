<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        
        'name',
        'product_img',
        'price'
        
    ];
    
    public function catagories()
    {
        return $this->belongsTo('App\Catagory','catagory_id');
    }
}
