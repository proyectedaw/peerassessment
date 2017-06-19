<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Proyecto;
use App\Reparto;

class RepartosController extends Controller
{
	public function asignar() 
	{
		/*
		1 -> 2,3,4,5,6
		2 -> 3,4,5,6,7
		3 -> 4,5,6,7,1
		4 -> 5,6,7,1,2
		5 -> 6,7,1,2,3
		6 -> 7,1,2,3,4
		7 -> 1,2,3,4,5
		*/

		$proyectos = DB::table('proyectos')
		->select('id','id_user')
		->get()
		->toArray();

		$proyecto1 = $this->array_rotate($proyectos);	
		$proyecto2 = $this->array_rotate($proyecto1);
		$proyecto3 = $this->array_rotate($proyecto2);
		$proyecto4 = $this->array_rotate($proyecto3);
		$proyecto5 = $this->array_rotate($proyecto4);

		//tabla de assignados
		for($i=0; $i<count($proyectos); $i++) {

			$reparto = new \App\Reparto;

			$reparto->id_user = $proyectos[$i]->id_user;
			$reparto->id_proyecto_1 = $proyecto1[$i]->id;
			$reparto->id_proyecto_2 = $proyecto2[$i]->id;
			$reparto->id_proyecto_3 = $proyecto3[$i]->id;
			$reparto->id_proyecto_4 = $proyecto4[$i]->id;
			$reparto->id_proyecto_5 = $proyecto5[$i]->id;

			$reparto->save();	
		}
		return redirect('/');	
	}

	private function array_rotate($arr)
	{		
		$elm = array_shift($arr);
		array_push($arr, $elm);
		return $arr;
	}

	public function mostrar() {
		$id_user = Auth::user()->id;
		$repartos = DB::table('proyectos')
		->join('repartos', 'repartos.id_user', 9 , 'repartos.id_proyecto_1', '=', 'proyectos.id', 'repartos.id_proyecto_2', '=', 'proyectos.id', 'repartos.id_proyecto_3', '=', 'proyectos.id', 'repartos.id_proyecto_4', '=', 'proyectos.id', 'repartos.id_proyecto_5', '=', 'proyectos.id' )
		->select('proyectos.disenyo')
		->get();
	}
}
