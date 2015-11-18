<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntidadSolicitante extends Model
{
    protected $table = 'entidad_solicitante'; 
    protected $primaryKey = 'id_entidad_solicitante'; 
    public $timestamps = false;  //se ignora campos de tiempo en la tabla 

    //se define la relacion entidad_solicitante(1) - planificacion(n)
    public function planificacion()
    {
        return $this->hasMany('App\Planificacion', 'id_entidad_solicitante');
    }
}
