<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    protected $fillable = [
        'isbn',
        'titulo',
        'clasificacion',
        'pie',
        'nota',
        'serie',
        'fisica',
        'descripcion',
        'autor_id',
        'editorial_id',
        'idioma',
        'ano_edicion',
        'ejemplares',
        'user_id'
    ];

    /* Relaciones */

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function autor(){

        return $this->belongsTo(Autor::class);
    }
    public function editorial(){

        return $this->belongsTo(Editorial::class);
    }
}
