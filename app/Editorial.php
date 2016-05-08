<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table = 'editoriales';

    protected $fillable = ['nombre'];

    /* Relaciones */

    public function libro(){

        return $this->hasMany(Libro::class);
    }
}
