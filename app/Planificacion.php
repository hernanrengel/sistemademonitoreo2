<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planificacion extends Model
{
    //
    protected $table = 'planificacion'; //se cambia el nombre de la tabla de 'proyectos' a 'proyecto'
    protected $primaryKey = 'id_proyecto'; //se cambia el id de la tabla de 'id' a 'id_proyecto'
    public $timestamps = false;  //se ignora campos de tiempo en la tabla 

    public function entidadSolicitante()
    {
        return $this->belongsTo('App\EntidadSolicitante', 'id_entidad_solicitante');
    }

    public function tipoPlantacion()
    {
        return $this->belongsTo('App\TipoPlantacion', 'id_tipo_plantacion');
    }

    public function responsable()
    {
        return $this->belongsTo('App\Usuario', 'id_usuario');
    }

    public function abastecimientoAguas(){
        return $this->belongsToMany('App\AbastecimientoAgua', 'aux_proyecto_agua', 'id_proyecto', 'id_abastecimiento_agua');
    }

  
}
