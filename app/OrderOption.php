<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderOption extends Model
{
    protected $table = 'OrdC_Opts';

    public function line(){
    	return $this->belongsTo('App\OrderLine', 'orderLine_id');
    }
}
