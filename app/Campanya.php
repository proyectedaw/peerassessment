<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campanya extends Model
{
    protected $fillable = ['estado_campanya', 'activa', 'nombre', 'fin'];

}
