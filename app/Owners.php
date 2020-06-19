<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

use Illuminate\Database\Eloquent\Model;

class Owners extends Model
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
}
