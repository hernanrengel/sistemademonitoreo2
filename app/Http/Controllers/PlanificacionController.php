<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlanificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ver()
    {
        //
        //return view('planificacion.create');
        $departamentos= \App\Departamento::all();
        $tipo_participantes= \App\TipoParticipante::all();

        return view('planificacion.create', [
            'departamentos'=> $departamentos,
            'tipo_participantes'=> $tipo_participantes
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function altadatosjsonpost(Request $request){
       //---- se recupera los datos recibidos----
       // $superficie_plantada= $request-> input('superficie_plantada');
    /*    $fechasolicitud= $request-> input('fechasolicitud');
        $comunidades= $request-> input('comunidades');
        $idTipoEntidad= $request-> input('idTipoEntidad');
        $idTipoPlantacion= $request-> input('idTipoPlantacion');
        $numPlantines= $request-> input('numPlantines');
        $numEstacas= $request-> input('numEstacas');
        $superficieProyectada= $request-> input('superficieProyectada');
        $especies=$request-> input('especies');
*/

           // $name = $request->input('parametro');
            $provincias=array("parametro"=>" 123345");
            return response()->json($provincias);

  


    }
   


   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function altadatosjsonget(Request $request){
           // $nombreEntidad=$request->input('nombreEntidad');
            $nombreEntidad=$request->input('nombreEntidad');
            $fechasolicitud=$request->input('fechasolicitud');
            $idTipoEntidad=$request->input('idTipoEntidad');
            $idTipoPlantacion = $request->input('idTipoPlantacion');
            $numPlantines=$request->input('numPlantines');
            $numEstacasphp=$request->input('numEstacas');
            $superficieProyectada=$request->input('superficieProyectada');

            //array
            $fuentesDeAgua=$request->input('fuentesDeAgua');
            $especies=$request->input('especies');
            /////////////////////////////////
            $provincias=array("parametro"=>$idTipoPlantacion." [unidad]",
                              "fechasolicitud"=>$fechasolicitud
                );

            $ide = DB::table('planificacion')->insertGetId(
            [
             'id_lugar'=>1,
             'id_entidad_solicitante' => $idTipoEntidad,
             'id_tipo_plantacion' => $idTipoPlantacion,
             'id_usuario'=>1,
             'cod_responsable'=>1,
             'numero_plantines_solicitados'=>$numPlantines,
             'numero_estacas_solicitados'=>$numEstacasphp,
             'superficie_programada'=>$superficieProyectada,
             'fecha_solicitud'=>$fechasolicitud,
             'nombre_institucion_solicitante'=>$nombreEntidad

             ],'id_proyecto'); 

            for ($j=0; $j < count($especies); $j++) { 
             DB::table('especie_programada')->insert(
                [
                'id_proyecto'=>$ide,
                  'id_especie_plantin'=>$especies[$j]['id_especie'],
               'numero_plantines'=>$especies[$j]['num_plantines'],
               'numero_estacas'=>$especies[$j]['num_estacas']

                ]);
      
            }

          for ($i=0; $i < count($fuentesDeAgua); $i++) { 
             DB::table('aux_proyecto_agua')->insert(
                ['id_proyecto'=>$ide,
               'id_abastecimiento_agua'=>$fuentesDeAgua[$i]['id_fuentes_de_agua']
                ]);

          }


   //     

    //    }



            return response()->json($provincias);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reporte(Request $request)
    {
        //
         $planificacion = DB::table('planificacion')->paginate(15);
         $planificacion->lastPage();
         if($request->ajax()){
                     return response()->json(view('reportes.planificacion2',compact('planificacion'))->render());
         }

        //$planificacion = DB::table('planificacion')->simplePaginate(15);
        return view('reportes.planificacion', compact('planificacion'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
