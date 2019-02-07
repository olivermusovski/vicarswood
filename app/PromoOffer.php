<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoOffer extends Model
{
    protected $table = 'PromoOffers';

    public function promo(){
    	return $this->belongsTo('App\PromoHistory', 'promo_history_id', 'id');
    }
}
