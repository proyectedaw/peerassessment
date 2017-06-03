<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proyecto;
use App\Campanya;
use App\Evaluacion;
use App\Aspecto;

class EvaluacionController extends Controller
{
    //
        public function index()
    {
        //
        $proyectos = Proyecto::all();
        $campanyas = Campanya::all();
        $aspectos = Aspecto::all();
        //$idproyecto = ''; //hay que pasarle el id del proyecto
        //$pseudonimos = Pseudonimo::all(); //conseguir el pseudonimo de la tabla de psedonimos que hace referencia al participante en cuestión

        //recoger el proyecto en cuestion y pasarlo a la vista evaluación. Es decir recoger el id del proyecto a evaluar y mostrar los datos de ese proyecto

        return view('evaluacion', compact(['proyectos', 'campanyas', 'pseudonimos', 'aspectos']));//, $idproyecto]));
        /*
         $proyectos = DB::table('proyectos')
            ->join('pseudonimos', 'users.id', '=', 'contacts.user_id')
            ->join('participantes', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
        */
    }
}
