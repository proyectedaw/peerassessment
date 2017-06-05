<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Participante;
use App\Campanya;
use App\Proyecto;
use App\Aspecto;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }
    public function paneladmininfo()
    {
        $participantes = Participante::all();
        $campanyas = Campanya::all();
        $proyectos = Proyecto::all();
        $aspectos = Aspecto::all();

        return view('paneladmin', compact('participantes','campanyas','proyectos','aspectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store (Request $request)
    {
        $validator = Validator::make($request->all(), [
        'nom'=>'required',
        'dob' => 'required',
        'email' => 'required|max:255',
        'dni' => 'required|max:9',
        'userpass'=>'required|max:10',]);
        if ($validator->fails()) {
            return back()
            ->withInput()
            ->withErrors($validator);
        }
        $participante = new \App\Participante;
        $participante->nom = $request->nom;
        $participante->dob =$request->dob;
        $participante->email = $request->email;
        $participante->dni = $request->dni;
        $participante->title = $request->title;
        $participante->save();
        //$participante = App::participante;
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
