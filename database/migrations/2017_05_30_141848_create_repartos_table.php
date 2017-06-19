<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repartos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->integer('id_proyecto_1')->unsigned();
            $table->foreign('id_proyecto_1')->references('id')->on('proyectos')->onDelete('cascade');

            $table->integer('id_proyecto_2')->unsigned();
            $table->foreign('id_proyecto_2')->references('id')->on('proyectos')->onDelete('cascade');

            $table->integer('id_proyecto_3')->unsigned();
            $table->foreign('id_proyecto_3')->references('id')->on('proyectos')->onDelete('cascade');

            $table->integer('id_proyecto_4')->unsigned();
            $table->foreign('id_proyecto_4')->references('id')->on('proyectos')->onDelete('cascade');

            $table->integer('id_proyecto_5')->unsigned();
            $table->foreign('id_proyecto_5')->references('id')->on('proyectos')->onDelete('cascade');

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
        Schema::table('repartos', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropColumn('id_user');

            $table->dropForeign(['id_proyecto_1']);
            $table->dropColumn('id_proyecto_1');

            $table->dropForeign(['id_proyecto_2']);
            $table->dropColumn('id_proyecto_2');

            $table->dropForeign(['id_proyecto_3']);
            $table->dropColumn('id_proyecto_3');

            $table->dropForeign(['id_proyecto_4']);
            $table->dropColumn('id_proyecto_4');

            $table->dropForeign(['id_proyecto_5']);
            $table->dropColumn('id_proyecto_5');

        });
        Schema::dropIfExists('repartos');
    }
}
