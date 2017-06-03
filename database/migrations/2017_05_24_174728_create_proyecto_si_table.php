<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoSiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proyecto_si', function (Blueprint $table) { 
            $table->integer('id_participante')->unsigned();
            $table->integer('id_projecte')->unsigned();
            $table->tinyInteger('proyecto');
            $table->foreign('id_participante')->references('id')->on('participantes');
            $table->foreign('id_projecte')->references('id')->on('proyectos');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('proyecto_si');
    }
}
