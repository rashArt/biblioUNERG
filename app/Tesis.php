<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tesis extends Model
{
    protected $table = 'tesis';

    protected $fillable = ['titulo', 'autor', 'tutor', 'area_id', 'especialidad_id', 'user_id'];

    /* Relaciones */

    public function user(){

        return $this->hasMany(User::class);
    }

    public function area(){

        return $this->hasMany(Area::class);
    }

    public function especialidad(){

        return $this->hasMany(Especialidad::class);
    }
}
