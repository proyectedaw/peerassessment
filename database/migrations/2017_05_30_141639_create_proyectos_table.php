<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned()->unique();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('titulo');
            $table->text('descripcion');
            $table->float('nota')->nullable();
            $table->binary('disenyo');
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
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropColumn('id_user');
        });
        Schema::dropIfExists('proyectos');
    }
}
