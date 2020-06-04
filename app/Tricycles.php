<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tricycles extends Model
{
    protected $fillable = [
            'id',
            'regNumber',
            'colour',
            'brand',
            'max_capacity'
    ];


    //defining the relationships that are related
}
