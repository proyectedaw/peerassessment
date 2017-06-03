<?php

use Illuminate\Database\Seeder;

class ParticipantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
           DB::table('participantes')->insert([
            'nom' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'dob'=>date("Y-m-d H:i:s"),
            'dni' => str_random(9),
            'userpass' => str_random(6)
        ]);

        //$this->call(AdministradoresTableSeeder::class);
   		//$this->call(PostsTableSeeder::class);
    	//$this->call(CommentsTableSeeder::class);
    }
}
