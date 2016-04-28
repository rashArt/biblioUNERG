<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table = 'grados';

    protected $fillable = ['titulo', 'autor', 'tutor', 'area_id', 'especialidad_id', 'user_id'];

    /* Relaciones */

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function area(){

        return $this->belongsTo(Area::class);
    }

    public function especialidad(){

        return $this->belongsTo(Especialidad::class);
    }
}
