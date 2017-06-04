<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campanya;

class CampanyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $campanyas = Campanya::all();

        return view('evaluacionproyecto', ['campanyas' => $campanyas]);
    }
/*
    public function campanyactivaep()
    {
        $campanyas = Campanya::all();
        return view('evaluacionproyecto', ['campanyas' => $campanyas]);
    }
    */
     public function campanyactivaap()
    {
        $campanyas = Campanya::all();
        return view('areaparticipante', ['campanyas' => $campanyas]);
    }
      public function campanyactivaadmin()
    {
        $campanyas = Campanya::all();
        return view('paneladmin', ['campanyas' => $campanyas]);
    }
    public function campanyactivaeva()
    {
        $campanyas = Campanya::all();
        return view('evaluacion', ['campanyas' => $campanyas]);
    }
     public function campanyactivaformp()
    {
        $campanyas = Campanya::all();
        return view('formentregaproyecto', ['campanyas' => $campanyas]);
    }
     public function campanyactivaold()
    {
        $campanyas = Campanya::all();
        return view('evaluacionold', ['campanyas' => $campanyas]);
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
    public function store(Request $request)
    {
        //
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
