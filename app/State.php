<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    public function country() {
    	return $this->belongsTo(\App\State::class, 'country_id');
    }

    public function cities() {
    	return $this->hasMany(\App\City::class, 'state_id');
    }
}
