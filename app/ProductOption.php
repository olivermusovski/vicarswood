<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductOption extends Model
{
    use HasTranslations;

    protected $table = 'ProductOptions';

    public $translatable = [
        'PositionName',
        'OptName'
    ];

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
