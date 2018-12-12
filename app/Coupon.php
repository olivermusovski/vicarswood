<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public static function findByCode($code) {
    	return self::where('code', $code)->first();
    }

    public function discount($total) {
    	if($this->type == 'fixed') {
    		return abs($this->value) * -1;
    	} elseif($this->type == 'percent') {
    		return abs(($this->percent_off / 100) * $total) * -1;
    	} else {
    		return 0;
    	}
    }
}
