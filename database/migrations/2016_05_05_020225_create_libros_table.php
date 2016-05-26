<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn');
            $table->string('titulo');
            $table->string('clasificacion');
            $table->string('pie', 1000);
            $table->string('nota', 1000);
            $table->string('serie');
            $table->string('fisica', 1000);
            $table->string('descripcion', 1000);
            $table->integer('autor_id')->unsigned();
            $table->integer('editorial_id')->unsigned();
            $table->enum('idioma', ['Espanol','Ingles','Frances'])->default('Espanol');
            $table->integer('ano_edicion'); //cambiar en phpmyadmin a tipo year
            $table->integer('ejemplares');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autores');
            $table->foreign('editorial_id')->references('id')->on('editoriales');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('libros');
    }
}
