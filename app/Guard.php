<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guard extends Model
{
    protected $fillable = [
        'date', 'hour', 'duration', 'max_quota'
    ];

    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function guard_users(){
        return $this->belongsToMany(User::class, 'guard_user');
    }
}
