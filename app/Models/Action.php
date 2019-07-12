<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected  $fillable = [
        'name', 'permission', 'description', 'resource', 'isActive'
    ];

    public function group(){
        return $this->belongsTo(Group::class);
    }
}
