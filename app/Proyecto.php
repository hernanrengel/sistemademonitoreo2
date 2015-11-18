<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table = 'proyecto'; //se cambia el nombre de la tabla de 'proyectos' a 'proyecto'
    protected $primaryKey = 'id_proyecto'; //se cambia el id de la tabla de 'id' a 'id_proyecto'
    public $timestamps = false;  //se ignora campos de tiempo en la tabla 

    //no es necesario colocar atributos del modelo(campos de la tabla)
    private $superficie_plantada;
    /*private $fecha_inicio_plantacion;
    private $fecha_fin_plantacion;*/

    //definimos la relacion proyecto- participantes(1 - n)
    public function participantes()
    {
        return $this->hasMany('App\Participantes', 'id_proyecto'); //como 2do par. es el verdaderop foreign key de 'participantes'
    }

      public function comunidades(){
        return $this->belongsToMany('App\Comunidad', 'proyecto_comunidad', 'id_proyecto', 'id_comunidad');
    }
}
