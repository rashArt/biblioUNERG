<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidades';

    protected $fillable = ['nombre', 'area_id'];

    /* Relaciones */

    public function especialidad(){

        return $this->HasMany(Area::class);
    }

    public function tesis(){

        return $this->belongsTo(Tesis::class);
    }
}
