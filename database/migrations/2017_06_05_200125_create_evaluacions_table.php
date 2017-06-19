<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_proyecto')->unsigned();
            $table->foreign('id_proyecto')->references('id')->on('proyectos')->onDelete('cascade');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('nota_1');
            $table->integer('nota_2');
            $table->integer('nota_3');
            $table->integer('nota_4');
            $table->integer('nota_5');
//            $table->double('nota');
            $table->rememberToken();
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
        Schema::table('evaluacions', function (Blueprint $table) { 
         $table->dropForeign(['id_proyecto']);
         $table->dropColumn('id_proyecto');
         $table->dropForeign(['id_user']);
         $table->dropColumn('id_user');
     });
        Schema::dropIfExists('evaluacions');
    }
}
