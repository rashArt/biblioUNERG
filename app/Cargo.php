<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table="cargos";

    protected $fillable = ['nombre'];


    /* Relaciones */

    public function user(){

      return $this->hasMany(User::class);
    }
}