<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    protected $table = 'OrdB_Lines';

    public function order(){
    	return $this->belongsTo('App\Order', 'order_id');
    }

    public function options(){
    	return $this->hasMany('App\OrderOption', 'orderLine_id');
    }
}
