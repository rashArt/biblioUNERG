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
            $table->string('descripcion', 1000);
            $table->string('autor');
            $table->string('editorial');
            $table->enum('idioma', ['Espanol','Ingles','Frances'])->default('Espanol');
            $table->integer('ano_edicion'); //cambiar en phpmyadmin a tipo year
            $table->integer('ejemplares');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

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
