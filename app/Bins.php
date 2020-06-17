<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bins extends Model
{
    //
    protected $fillable = [
        'id',
        'serialNumber',
        'Level_of_waste',
        'ownerId',
        'maxWeight',
        'location'
        ];

    public function binOwners(){
        return $this->hasOne('App\BinOwners');
    }

}

