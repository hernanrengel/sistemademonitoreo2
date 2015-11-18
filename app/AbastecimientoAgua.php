<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbastecimientoAgua extends Model
{
    //
    protected $table = 'abastecimiento_agua'; //se cambia el nombre de la tabla de 'proyectos' a 'proyecto'
    protected $primaryKey = 'id_abastecimiento_agua'; //se cambia el id de la tabla de 'id' a 'id_proyecto'
    public $timestamps = false;  //se ignora campos de tiempo en la tabla 
}
