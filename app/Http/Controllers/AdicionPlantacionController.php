<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

class AdicionPlantacionController extends Controller
{
    public function pruebas()
    {
    }


    public function ver($idProyecto)  // se recibe el id del proyecto para jalar datos de pre-plantacion
    {   
        $departamentos= \App\Departamento::all();
        $tipo_participantes= \App\TipoParticipante::all();
        $tipoTerrenos= \App\TipoTerreno::all();
        $abastecimientoAguas= \App\AbastecimientoAgua::all();
        $tipoPlantaciones= \App\TipoPlantacion::all();
        
        //obteniendo datos de solicitante
        $planificacion = \App\Planificacion:: find($idProyecto);
      //  $proyecto = \App\Proyecto:: find($idProyecto);
        $entidadSolicitante= $planificacion-> entidadSolicitante;
        $tipoPlantacion= $planificacion-> tipoPlantacion;
        $responsable= $planificacion-> responsable;
        $abastecimientoAguasPlanificacion= $planificacion-> abastecimientoAguas;
      //  $comunidades= $proyecto-> comunidades;

        // return $comunidades;
        //--- estableciendo los abastecimiento de agua que son del proyecto ---
        for ($i=0; $i <count($abastecimientoAguas) ; $i++) { 
            $abastecimientoAguas[$i]['seleccionado']= 0;
            for ($j=0; $j <count($abastecimientoAguasPlanificacion) ; $j++) { 
                if($abastecimientoAguas[$i]['id_abastecimiento_agua']== $abastecimientoAguasPlanificacion[$j]['id_abastecimiento_agua']){
                    $abastecimientoAguas[$i]['seleccionado']= 1;
                    break;
                }
            }    
        }




        return view('adicion_plantacion', [
            'departamentos'=> $departamentos,
            'tipo_participantes'=> $tipo_participantes,
            'tipo_plantaciones'=> $tipoPlantaciones,
            'abastecimiento_aguas'=> $abastecimientoAguas, //aqui ya estan seleccionando los abastecimientos de agua del proyecto

            'entidad_solicitante'=> $entidadSolicitante,
            'tipo_terrenos'=> $tipoTerrenos,
            'tipo_plantacion'=> $tipoPlantacion,
            'responsable'=> $responsable,
        ]);
    }










   	public function procesar(Request $request)
    {
        //---- se recupera los datos recibidos----
        $superficie_plantada= $request-> input('superficie_plantada');
        $fecha_inicio_plantacion= $request-> input('fecha_inicio_plantacion');
        $fecha_fin_plantacion= $request-> input('fecha_fin_plantacion');
        $comunidades= $request-> input('comunidades');
        $participantes= $request-> input('participantes');
        $tipoTerrenos= $request-> input('tipo_terrenos');

        //se asigna datos al modelo proyecto y se lo guarda
        $proyecto= new \App\Proyecto();
        $proyecto-> id_proyecto= 11;
        $proyecto-> superficie_plantada= $superficie_plantada;
        $proyecto-> fecha_inicio_plantacion= $fecha_inicio_plantacion;
        $proyecto-> fecha_fin_plantacion= $fecha_fin_plantacion;
        $proyecto-> save();
        
        $ind= 110;
        //se itera sobre cada participante y se lo adiciona en la bd
        for ($i=0; $i < count($participantes); $i++) { 
            $auxPar= new \App\Participantes();
            $auxPar-> id_participante= ++$ind;
            $auxPar-> id_tipo_participante= $participantes[$i]['id_tipo_participante'];
            $auxPar-> total= $participantes[$i]['total'];
            $auxPar-> total_hombre= $participantes[$i]['total_hombre'];
            $auxPar-> total_mujer= $participantes[$i]['total_mujer'];
            $proyecto-> participantes()-> save($auxPar);
        }

        //--- se adiciona los tipos de terrenos 
        for ($i=0; $i < count($participantes); $i++) { 
            $auxPar= new \App\Participantes();
            $auxPar-> id_participante= ++$ind;
            $auxPar-> id_tipo_participante= $participantes[$i]['id_tipo_participante'];
            $auxPar-> total= $participantes[$i]['total'];
            $auxPar-> total_hombre= $participantes[$i]['total_hombre'];
            $auxPar-> total_mujer= $participantes[$i]['total_mujer'];
            $proyecto-> participantes()-> save($auxPar);
        }
        return response()->json([
            // 'comunidades' => $comunidades,
            'superficie_plantada' => $superficie_plantada,
            'fecha_inicio_plantacion' => $fecha_inicio_plantacion,
            'fecha_fin_plantacion' => $fecha_fin_plantacion,
            'participantes' => $participantes,
            'tipo_terrenos' => $tipo_terrenos
            /*'provincia' => $provincia,
            'municipio' => $municipio*/
        ]);
    }

    public function getProvincias(Request $request)
    {
        $id_departamento= $request-> input('id_departamento');
        $provincias= \App\Provincia::where('id_departamento', $id_departamento)-> get();

        return response()->json($provincias);
    }

    public function getMunicipios(Request $request)
    {
        $id_provincia= $request-> input('id_provincia');
        $municipios= \App\Municipio::where('id_provincia', $id_provincia)-> get();

        return response()->json($municipios);
    }
   
    public function getComunidades(Request $request)
    {
        $id_municipio= $request-> input('id_municipio');
        $comunidades= \App\Comunidad::where('id_municipio', $id_municipio)-> get();

        return response()->json($comunidades);
    }
}