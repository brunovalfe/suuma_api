<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guard extends Model
{
    protected $fillable = [
        'date', 'hour', 'duration', 'max_quota', 'type', 'description'
    ];

    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function guard_user(){
        return $this->belongsToMany(User::class, 'guard_user')
            ->withPivot('role', 'isActive')
            ->withTimestamps();
    }
}
