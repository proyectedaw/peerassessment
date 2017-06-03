<?php

use Illuminate\Database\Seeder;

class FasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     	DB::table('fases')->insert([
            'nom' => str_random(10),
            'activa' => 0
        ]);
    }
}
