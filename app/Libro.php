<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libro';

    protected $fillable = ['isbn', 'titulo', 'descripcion', 'autor', 'editorial', 'idioma', 'ano_edicion', 'ejemplares','user_id'];

    /* Relaciones */

    public function user(){

        return $this->hasMany(User::class);
    }
}