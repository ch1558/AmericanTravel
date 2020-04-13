<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = ['user_document', 'user_phone', 'user_email', 'password', 
                            'user_name', 'user_lastname', 'user_position'];
    protected $hidden = [ 'password' ];
}
