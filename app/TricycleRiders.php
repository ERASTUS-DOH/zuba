<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TricycleRiders extends Model{
    protected $fillable = [
            'id',
            'fname',
            'lname',
            'email',
            'telephone',
            'residential_address'
    ];

    public function bins(){
        return $this->hasMany('App\Bins');
    }
}
