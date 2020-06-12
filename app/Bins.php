<?php

namespace App;
use App\BinOwners;
use App\BinRequest;
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
        'smoke_noti'
        ];




}

