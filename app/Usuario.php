<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'usuario'; //se cambia el nombre de la tabla de 'proyectos' a 'proyecto'
    protected $primaryKey = 'id_usuario'; //se cambia el id de la tabla de 'id' a 'id_proyecto'
    public $timestamps = false;  //se ignora campos de tiempo en la tabla 
}
