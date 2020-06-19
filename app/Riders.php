<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Riders extends Model
{
    //

    use Notifiable,HasApiTokens;

    protected $fillable = [
        'fname',
        'lname',
        'other_name',
        'telephone',
        'address',
        'email',
        'password'

    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
