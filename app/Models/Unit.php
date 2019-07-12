<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'name', 'year', 'model', 'tire', 'license_plate', 'policy_key', 'card_number', 'isActive'
    ];

    public function guards(){
        return $this->hasMany(Guard::class);
    }
}
