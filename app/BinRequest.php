<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinRequest extends Model
{
    //
    protected $fillable = [
        'id',
        'bin_id',
        'waste_level',
        'weight',
        'smoke_noti',
        'location_long',
        'location_lat',
        'request_state'

    ];


    //bins relationship with the request.
    public function bins(){
        return $this->hasOne('App\Bins');
    }
}
