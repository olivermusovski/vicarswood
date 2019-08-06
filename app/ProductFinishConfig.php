<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductFinishConfig extends Model
{
    use HasTranslations;

    protected $table = 'ProductFinishConfig';

    public $translatable = [
        'Config',
        'Option',
        'Desc'
    ];

}
