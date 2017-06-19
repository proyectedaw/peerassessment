<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
require_once 'vendor/autoload.php';


/*$factory->define(App\User::class, function (Faker\Generator $faker) {
	static $password;

	$faker = new Faker\Generator();
	$faker->addProvider(new Faker\Provider\es_ES\Usuario($faker));

	$user = [
	'dni' => $faker->dni,
	'nombre' => $faker->nombre,
	'apellido_1' => $faker->apellido,
	'apellido_2' => $faker->apellido,
	'email' => $faker->freeEmail,
	'password' => $password ?: $password = bcrypt(str_random(10)),
	'remember_token' => str_random(10),
	'pseudonimo' => $faker->userName,
	];

	return $user;

});
*/
/*
$factory->define(App\Proyecto::class, function ($faker) use ($factory)  {

	//Select array id_usuarios que no son admin
	$user_ids = \DB::table('users')->select('id')->where('admin',0)->get()->toArray();
	$user_id = $faker->unique()->randomElement($user_ids)->id;

	return [
	'id_user' => $user_id,
	'titulo' => $faker->sentence,
	'descripcion' => $faker->paragraph,
	'disenyo' => $faker->image('public/images'),
	];
});*/
/*
$factory->define(App\Evaluacion::class, function ($faker) use ($factory)  {

	//Select array id_usuarios que no son admin
	$proyectos_ids = \DB::table('proyectos')->select('id')->get()->toArray();
	$proyecto_id = $faker->unique()->randomElement($proyectos_ids)->id;

	$user_id = \DB::table('proyectos')->select('id_user')->where('id', '=', $proyecto_id)->get();
	//$user_id = $faker->unique()->randomElement($proyectos_ids)->id_user;

	return [
	'id_proyecto' => $proyecto_id,
	'id_user' => $user_id[0]->id_user,
	'nota_1' => $faker->numberBetween($min = 1, $max = 5),
	'nota_2' => $faker->numberBetween($min = 1, $max = 5),
	'nota_3' => $faker->numberBetween($min = 1, $max = 5),
	'nota_4' => $faker->numberBetween($min = 1, $max = 5),
	'nota_5' => $faker->numberBetween($min = 1, $max = 5),
	];
});*/