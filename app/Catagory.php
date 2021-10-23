<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $fillable = [
        
        'title'
        
    ];
    public function products()
    {
        return $this->belongsTo('App\Product');
    }
}
