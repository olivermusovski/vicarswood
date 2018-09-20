<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $table = 'ProductOptions';

    public function product(){
    	return $this->belongsTo('App\Product', 'BaseNBR', 'BaseNBR');
    }
}
