<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'appat', 'apmat', 'date_birth', 'blood_type', 'CURP', 'tel_contact', 'tel_contact_2',
        'ec_name', 'ec_appat', 'ec_apmat', 'ec_relationship',
        'dir_street', 'dir_state', 'dir_col', 'dir_pc',
        'fis_business_name', 'fis_dir_fiscal', 'fis_RFC', 'fis_email',
        'generation', 'BLS_exp', 'photo'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function insurances(){
        return $this->hasMany(Insurance::class);
    }

    public function diseases(){
        return $this->hasMany(Disease::class);
    }
}
