<?php

namespace App;
use App\TricycleRiders;
use Illuminate\Database\Eloquent\Model;

class Tricycles extends Model
{
    protected $fillable = [
            'id',
            'regNumber',
            'colour',
            'brand',
            'max_capacity'
    ];


    //defining the relationships that are related

    public function tricycleRiders(){
        return $this->belongsTo('App\TricycleRiders');
    }
}
