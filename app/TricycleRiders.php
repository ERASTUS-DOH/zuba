<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TricycleRiders extends Model{
    protected $fillable = [
        'id',
        'rider_id',
        'truck_id'
    ];


}
