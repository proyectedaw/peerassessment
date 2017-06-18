<?php

use App\Proyecto;
use App\Campanya;
use App\Aspecto;
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

Route::get('evaluacion', function(){ 
	 $proyectos = Proyecto::all();
    	$campanyas = Campanya::all();
        $aspectos = Aspecto::all();

        return view('evaluacion', compact(['proyectos', 'campanyas','aspectos']));
	//return View::make('evaluacion');
});

//Route::get('search', ['as' => 'search', 'uses' => 'SearchController@search']);
//https://stackoverflow.com/questions/27298426/how-to-pass-get-parameters-to-laravel-from-with-get-method

/*
Route::get('evaluacion/{id}', function ($id) {
    session(['id' => $id]);
    return \Redirect::back();
})
*/

Route::get('/evaluacionproyecto','ProyectoController@index');
Route::get('/paneladmin','ParticipanteController@paneladmininfo');
Route::get('/areaparticipante','CampanyaController@campanyactivaap');
Route::get('/condicioneseval','EvaluacionController@condicioneseval');
Route::get('evaluacion/{id}','ImageController@mostrarcartel');
Route::get('formentregaproyecto','CampanyaController@campanyactivaformp');

//Rutas al controlador de imagenes:

//Route::get('cartel', 'ImageController@showPictureList');
Route::get('cartel/{id}', 'ImageController@showPicture');
Route::get('formentregaproyecto', 'ImageController@addPicture');

Route::get('entregasatisfactoria', function(){ 
	$campanyas = Campanya::all();
	return View::make('entregasatisfactoria',compact(['campanyas']));
});
Route::post('add', 'ImageController@savePicture');



/*
Route::get('areaparticipante', function(){
	return View::make('areaparticipante');
});
*/

Route::get('evaluacionold', 'CampanyaController@campanyactivaold');

//ruta multidioma

Route::group(['middleware' => ['web']], function () {
 
    Route::get('/', function () {
        return view('principal');
    });
 
    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'ca|es'
    ]);
 
});