<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    protected $hidden = [
        'pivot'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'group_user')->withTimestamps();
    }

    public function actions(){
        return $this->hasMany(Action::class);
    }
}
