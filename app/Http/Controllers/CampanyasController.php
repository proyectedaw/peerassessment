<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class CampanyasController extends Controller
{
	public function store(Request $request) {
		$validator = Validator::make($request->all(), [
			'estado_campanya' => 'required',
			'activa' => 'required',
			'nombre' => 'required',
			'fin' => 'required',
			]);
		if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}
		$campanya = new \App\Campanya;
		$campanya->estado_campanya = $request->estado_campanya;
		$campanya->activa = $request->activa;
		$campanya->nombre = $request->nombre;
		$campanya->fin = $request->fin;
		$campanya->save();
	}

	public function lista() {
		$campanyas = \App\Campanya::all();
		return view('admincampanyas', ['campanyas' => $campanyas]);
	}
}