<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = [
        'insurance_type', 'institution', 'policy_key', 'pref_hospital'
    ];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
