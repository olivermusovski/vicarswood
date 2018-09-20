<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPackaging extends Model
{
    protected $table = 'ProductPackagings';

    public function product(){
    	return $this->belongsTo('App\Product', 'BaseNBR');
    }
}
