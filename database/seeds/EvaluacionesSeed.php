<?php

use Illuminate\Database\Seeder;

class EvaluacionesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Evaluacion::class, 300)->create();
    }
}
