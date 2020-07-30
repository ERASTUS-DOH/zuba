<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bins extends Model
{
    //
    protected $fillable = [
        'id',
        'nickname',
        'serialNumber',
        'max_level',
        'maxWeight',
        'current_level',
        'current_weight',
        'location_lat',
        'location_long',
        'smoke_noti',
        'assign_state'
    ];



    public function binOwners(){
        return $this->hasOne('App\BinOwners');
    }

}

