<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['id_user', 'titulo','descripcion','nota', 'disenyo'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
