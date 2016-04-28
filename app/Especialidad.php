<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidades';

    protected $fillable = ['nombre', 'area_id'];

    /* Relaciones */

    public function area(){

        return $this->belongsTo(Area::class);
    }

    public function grado(){

        return $this->hasMany(Grado::class);
    }

    public static function especialidad($id){
      return Especialidad::where('area_id', $id)->get();
    }

}
