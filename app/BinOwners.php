<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinOwners extends Model
{
    //
    protected $fillable = [
        'owner_ID',
        'binId'
    ];

    public function bins(){
        return $this->hasMany('App\Bins');
    }
}
