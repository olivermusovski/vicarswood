<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $table = 'ProductOptions';

    public function product(){
    	return $this->belongsTo('App\Product', 'BaseNBR', 'BaseNBR');
    }

    // calculation functions

    // calculates the cost of the option
    public function getCost() {
        $cost = $this->OptStdLabor + $this->OptStdMaterial + $this->OptStdOverhead;
        return $cost;
    }
}
