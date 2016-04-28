<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    protected $fillable = ['nombre'];

    /* Relaciones */

    public function especialidad(){

        return $this->hasMany(Especialidad::class);
    }

    public function grado(){

        return $this->hasMany(Grado::class);
    }
}
