<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'ProductHeaders';

    public function details(){
    	return $this->hasMany('App\ProductDetail', 'BaseNBR', 'BaseNBR');
    }

    public function detail(){
        return $this->hasOne('App\ProductDetail', 'BaseNBR', 'BaseNBR')->limit(1)->where('ObjectSequence', 1);
    }

    public function options(){
    	return $this->hasMany('App\ProductOption', 'BaseNBR', 'BaseNBR');
    }

    public function packagings(){
    	return $this->hasMany('App\ProductPackaging', 'BaseNBR');
    }

    public function orderLine(){
        return $this->belongsTo('App\OrderLine', 'BaseNBR', 'BaseNBR');
    }

    // calculation functions

    // calculates the base cost of the product
    public function getCost() {
        $cost = $this->BaseStdLabor + $this->BaseStdMaterial + $this->BaseStdOverhead;
        return $cost;
    }

}
