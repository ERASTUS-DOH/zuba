<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinRequest extends Model
{
    //
    protected $fillable = [
        'id',
        'bin_id',
        'bin_current_level',
        'current_weight',
        'smoke_state',
        'bin_state'

    ];

    //bins relationship with the request.
    public function bins(){
        return $this->hasOne('App\Bins');
    }
}
