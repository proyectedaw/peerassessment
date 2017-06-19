<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//PRINCIPAL
Route::get('/', function () {
	return view('principal');
});

//RUTES AUTENTICACIO
Auth::routes();

Route::get('/disenyos', 'ProyectosController@listar');

//IDIOMES
Route::group(['middleware' => ['web']], function () {

	/*Route::get('/', function () {
		return view('principal');
	});*/
	Route::get('lang/{lang}', function ($lang) {
		session(['lang' => $lang]);
		return \Redirect::back();
	})->where([
	'lang' => 'ca|es'
	]);

});

//AREA PARTICIPANTE
//Route::get('area-usuario', 'UsersController@opciones');
Route::get('area-usuario', function() {
	return view('areaparticipante');
});

//CONDICIONES EVALUACION
Route::get('/condiciones-evaluacion', function () {
	$campanyas = \App\Campanya::all();
	return view('condeval', ['campanyas' => $campanyas]);
});

//SUBIR PROYECTO
Route::get('/subir-proyecto', function() {
	return view('subirproyecto');
});
Route::post('/subir-proyecto', 'ProyectosController@store');

//EVALUAR PROYECTO
Route::get('/evaluaciones', function() {
	return view('evaluaciones');
});

//ADMINISTRACION

Route::get('/administrar', function() {
	return view('administracion');
});

//USUARIOS
Route::get('/administrar-usuarios', 'UsersController@lista');

//CAMPAÑAS
Route::get('/administrar-campanyas', 'CampanyasController@lista');

//ASIGNAR PROYECTOS
Route::get('repartos', 'RepartosController@asignar');

//ASIGNAR NOTAS
Route::get('notas', 'ProyectosController@update');