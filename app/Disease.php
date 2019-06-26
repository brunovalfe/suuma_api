<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable = [
        'disease_type', 'description', 'medication', 'medication_detail'
    ];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
