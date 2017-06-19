<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampanyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanyas', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estado_campanya');
            $table->boolean('activa');
            $table->string('nombre');
            $table->timestamps();
            $table->date('fin');
        });

        App\Campanya::create([
            'estado_campanya' => true,
            'activa' => true,
            'nombre' => 'Mercè 2017',
            'fin' => '2017-06-06',
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campanyas');
    }
}
