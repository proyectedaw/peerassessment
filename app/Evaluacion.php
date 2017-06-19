<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $fillable = ['id_user', 'id_proyecto','nota_1','nota_2', 'nota_3','nota_4','nota_5'];
}
