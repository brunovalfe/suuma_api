<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'group_user');
    }

    public function actions(){
        return $this->hasMany(Action::class);
    }
}
