<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductFinish extends Model
{
    use HasTranslations;

    protected $table = 'ProductFinishes';

    public $translatable = [
        'FinishName'
    ];

}
