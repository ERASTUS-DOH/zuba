<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManualPickRequest extends Model
{
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
}
