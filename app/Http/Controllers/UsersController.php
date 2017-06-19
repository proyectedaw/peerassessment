<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use \App\User;
Use \Carbon;

class UsersController extends Controller
{
	public function lista() {
		$usuarios = \App\User::all();

		return view('adminusuarios', ['usuarios' => $usuarios]);
	}

	/*public function opciones() {
		$fecha = Carbon\Carbon::now();
		$hora = $fecha->hour;
		$minutos = $fecha->minute;
		$accion="";
		if ($minutos < 25) {
			$accion = "languaje.area_accion_subir";

		} else {
			$accion = "languaje.area_accion_evaluar";
		}
		return view('areaparticipante',['accion' => $accion]);
	}*/
}
