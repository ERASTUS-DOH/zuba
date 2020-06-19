<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Riders extends Authenticatable
{
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
