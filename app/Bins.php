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
        'locationID',
        'smoke_noti',
        'assign_state'
    ];



    public function binOwners(){
        return $this->hasOne('App\BinOwners');
    }

}

