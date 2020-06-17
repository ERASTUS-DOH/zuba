<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinOwners extends Model
{
    //
    protected $fillable = [
        'name',
        'location',
        'email',
        'telephone',
        'binId'
    ];

    public function bins(){
        return $this->hasMany('App\Bins');
    }
}
