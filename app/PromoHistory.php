<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoHistory extends Model
{
    protected $table = 'PromoHistory';

    public function offers(){
    	return $this->hasMany('App\PromoOffer', 'promo_history_id', 'id');
    }
}
