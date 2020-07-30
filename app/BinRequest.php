<?php

namespace App;

use App\Http\Resources\Bin;
use Illuminate\Database\Eloquent\Model;

class BinRequest extends Model
{
    //
    protected $fillable = [
        'id',
        'bin_id',
        'current_level',
        'current_weight',
        'smoke_noti',
        'location_long',
        'location_lat',
        'request_state'

    ];


    //bins relationship with the request.
    public function bins(){
        return $this->hasOne(Bin::class);
    }

//    public function requestState(){
//        return $this->hasOne(RequestState::class);
//    }
}
