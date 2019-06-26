<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'range', 'check_privacy', 'first_time', 'isActive'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];


    public function groups(){
        return $this->belongsToMany(Group::class, 'group_user');
    }

    public function sessions(){
        return $this->hasMany(Session::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function guards(){
        return $this->hasMany(Guard::class);
    }

    public function guard_user(){
        return $this->belongsToMany(Guard::class, 'guard_user');
    }
}
