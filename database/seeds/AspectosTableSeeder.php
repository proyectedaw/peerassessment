<?php

use Illuminate\Database\Seeder;

class AspectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function getClientNumber()
     {
         do{
             $rand = $this->generateRandomString(1);
          }while(!empty(Client::where('client_number',$rand)->first()));
           return $rand;
    }
    public function run()
    {
        //
              DB::table('aspectos')->insert([
            'descripcion' => str_random(20),
            'porcentaje' => $this->getClientNumber()
        ]);
    }
}
