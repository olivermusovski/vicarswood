<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'OrdA_Hdr';

    public function user() {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function lines(){
    	return $this->hasMany('App\OrderLine', 'order_id');
    }
}
