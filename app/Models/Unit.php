<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'unit_name',
        'name',
        'year',
        'license_plate',
        'model',
        'type',
        'policy_key',
        'wheel_type',
        'card_number',
        'description',
        'isActive'
    ];

    public function guards(){
        return $this->hasMany(Guard::class);
    }
}
