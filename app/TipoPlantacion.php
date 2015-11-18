<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPlantacion extends Model
{
    //
    protected $table = 'tipo_plantacion'; //se cambia el nombre de la tabla de 'proyectos' a 'proyecto'
    protected $primaryKey = 'id_tipo_plantacion'; //se cambia el id de la tabla de 'id' a 'id_proyecto'
    public $timestamps = false;  //se ignora campos de tiempo en la tabla 
}
