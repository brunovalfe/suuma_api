<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected  $fillable = [
        'name', 'permission', 'description'
    ];

    public function group(){
        return $this->belongsTo(Group::class);
    }
}
