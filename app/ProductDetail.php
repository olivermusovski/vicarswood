<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductDetail extends Model
{
	use HasTranslations;

	protected $table = 'ProductDetails';

	public $translatable = [
		'ObjectName'
	];

    public function product(){
    	return $this->belongsTo('App\Product', 'BaseNBR', 'BaseNBR');
    }
}
