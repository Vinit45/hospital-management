<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'doctor';

    protected $fillable = [
        'name', 'email', 'password','phone_no','emp_id','role_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}