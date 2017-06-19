<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluacionesController extends Controller
{
    public function store(Request $request) {
		$validator = Validator::make($request->all(), [
			'nota_1' => 'required',
			'nota_2' => 'required',
			'nota_3' => 'required',
			'nota_4' => 'required',
			'nota_5' => 'required',
			]);
		if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}
		$evaluacion = new \App\Evaluacion;
		$evaluacion->id_user = $request->id_user;
		$evaluacion->id_proyecto = $request->id_proyecto;
		$evaluacion->nota_1 = $request->nota_1;
		$evaluacion->nota_2 = $request->nota_2;
		$evaluacion->nota_3 = $request->nota_3;
		$evaluacion->nota_4 = $request->nota_4;
		$evaluacion->nota_5 = $request->nota_5;
		$evaluacion->save();
	}
}
