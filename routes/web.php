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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', function () {
    return view('principal');
});

*/
Route::get('/', function () {
	return view('principal');
});

//Formulario de login
Route::get('formlogin', function(){ 
	return View::make('formlogin');
});

//Formulario de entrega de proyecto
Route::get('formentregaproyecto', function(){ 
	return View::make('formentregaproyecto');
});


/*
Route::get('evaluacionproyecto', function(){ 
	//$campanya = DB::table('campanyas')->get();
	//return $campanya;

	//return view('evaluacionproyecto', compact($campanya));
	//return view('evaluacionproyecto');

	$campanyas = \App\Campanya::all();
	return view('evaluacionproyecto', ['campanyas'=>$campanyas]);
});
*/
//Route::get('/evaluacionproyecto','CampanyaController@index');


Route::get('/evaluacionproyecto','ProyectoController@index');
Route::get('/areaparticipante','CampanyaController@campanyactivaap');
Route::get('/evaluacion','EvaluacionController@index');
Route::get('formentregaproyecto','CampanyaController@campanyactivaformp');

//Rutas al controlador de imagenes:

Route::get('cartel', 'ImageController@showPictureList');
Route::get('cartel/{id}', 'ImageController@showPicture');
Route::get('formentregaproyecto', 'ImageController@addPicture');

Route::get('entregasatisfactoria', function(){ 
	return View::make('entregasatisfactoria');
});
Route::post('add', 'ImageController@savePicture');



/*
Route::get('areaparticipante', function(){
	return View::make('areaparticipante');
});
*/

Route::get('evaluacionold', 'CampanyaController@campanyactivaold');
