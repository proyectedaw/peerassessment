<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
	/*
	public $table = 'participantes';
    //
    public static function saveFormData($data)
    {
    	DB::table('participantes')->insert($data);
    }
    */
     public $participante = [
    'nom',
    'email',
    'dni'
    ];
}
