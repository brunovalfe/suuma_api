<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'nombre_curso','tipo','fecha_ac','fecha_cad','duracion','observaciones','estado_solicitud','file'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
