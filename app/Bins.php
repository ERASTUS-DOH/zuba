<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bins extends Model
{
    //
    protected $fillable = [
        'ownerId',
        'maxWeight',
        'location',
        ];

}
