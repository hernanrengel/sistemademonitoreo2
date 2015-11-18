<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
{
    //
    protected $table = 'comunidad';
    protected $primaryKey = 'id_comunidad';

    /*public function planificaciones(){
        return $this->belongsToMany('App\Planificacion');
    }*/
}
