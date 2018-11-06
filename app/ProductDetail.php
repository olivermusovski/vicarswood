<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
	protected $table = 'ProductDetails';

    public function product(){
    	return $this->belongsTo('App\Product', 'BaseNBR', 'BaseNBR');
    }
}
