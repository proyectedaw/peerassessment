<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');  
            $table->string('nombre');
            $table->string('apellido_1');
            $table->string('apellido_2');
            $table->string('dni')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('pseudonimo');
            $table->boolean('admin')->default(0);
            $table->timestamps();
        });

        App\User::create([
            'nombre' => 'pili',
            'apellido_1' => 'bielsa',
            'apellido_2' => 'martinez',
            'dni' => '19091990P',
            'email' => 'pbielsam@jaumebalmes.net',
            'password' => bcrypt('04031992M'),
            'pseudonimo' => 'beby',
            'admin' => true,
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
