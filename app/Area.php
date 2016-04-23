<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    protected $fillable = ['nombre'];

    /* Relaciones */

    public function especialidad(){

        return $this->belongsTo(Especialidad::class);
    }

    public function grado(){

        return $this->belongsTo(Grado::class);
    }
}
