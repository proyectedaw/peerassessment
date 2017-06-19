<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Proyecto;
use App\Evaluacion;
use \Carbon;

class ProyectosController extends Controller
{
	public function store(Request $request) {

		$validator = Validator::make($request->all(), [
			'id_user' => 'required',
			'titulo' => 'required',
			'descripcion' => 'required',
			]);

		if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}

		$proyecto = new \App\Proyecto;
		$proyecto->id_user = Auth::user()->id;
		$proyecto->titulo = $request->titulo;
		$proyecto->descripcion = $request->descripcion;
		$proyecto->disenyo = $request->disenyo;
		$proyecto->save();

		return view('areaparticipante');
	}

	public function update(Request $request) {

		//Select all records.
		//Get the ID for each record.
		$proyectos = DB::table('proyectos')
		->select('id','id_user')
		->get()
		->toArray();

		//Loop through the IDs.
		for($i=0; $i<count($proyectos); $i++) {

			$nota = DB::table('evaluacions')
			->where('id', $proyectos[$i]->id)
			->avg('nota_1','nota_2','nota_3','nota_4','nota_5');

			$p = \App\Proyecto::find($proyectos[$i]->id);
			$p->nota=$nota;
			$p->save();
		}	
	}

	/*public function opciones() {
		$fecha = Carbon\Carbon::now();
		$hora = $fecha->hour;
		$minutos = $fecha->minute;
		$accion="";
		if ($minutos < 35) {
			return view('subirproyecto',['accion' => $accion]);

		} else {
			return view('evaluacionproyecto',['accion' => $accion]);
		}
		
	}*/

	public function listar() {
		$proyectos = DB::table('proyectos')
		->join('users','proyectos.id_user','=','users.id')
		->select('disenyo','titulo','users.pseudonimo','nota')
		->orderBy('nota','desc')
		->limit(5)
		->get();

		return view ('/disenyos', ['proyectos' => $proyectos]);
	}
}