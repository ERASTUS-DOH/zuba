<?php

namespace App;
use App\Bins;
use App\User;


use Illuminate\Database\Eloquent\Model;

class BinOwners extends Model
{
    //
    protected $fillable = [
        'owner_ID',
        'binId'
    ];




}
