<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
   public $proyecto = [
   'id',
   'id_partipante',
   'id_admin',
   'titol',
   'cartel',
   'descripcion'
   ];
}
