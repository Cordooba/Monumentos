<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monumentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('ciudad');
            $table->string('estilo');
            $table->string('siglo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('monumentos');
    }
}
