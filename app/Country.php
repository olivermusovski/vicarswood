<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    public function states() {
    	return $this->hasMany(\App\State::class, 'country_id');
    }
}
