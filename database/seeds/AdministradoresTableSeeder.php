<?php

use Illuminate\Database\Seeder;

class AdministradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('administradores')->insert([
            'user' => str_random(10),
            'adminpass' => str_random(6)
        ]);
    }
}
