<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MonitoreoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function index()
    {
        //
        return view('monitoreo.create');
    }
    
    public function ppm(){
        return view('monitoreo.ppm');
    }


    public function verajax(Request $request)
    {
        
          /*  $items=array();
            array_push($items,array('title'=>'tet'.time()));
            sleep(1);
            array_push($items,array('title'=>'tet'.time()));

            //header('Content-Type: application/json');
            //return json_encode($items);
            return response()->json($items);
            */
            //return "texto";


            $name = $request->input('parametro');
            $provincias=array("parametro"=>$name." 123345");
            return response()->json($provincias);


            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function peticion(){
        //return view('monitoreo.create');
        //echo "alert('Hola mundo')"; 

        echo "noexiste";
    }
    
    public function peticionajax(Request $request){
          //return view('monitoreo.create');
          //$id_departamento= $request-> input('parametro');
          //Input::get('valorCaja1')
          $name = $request->input('parametro');
          $items=array();
          array_push($items,array('title'=>'tet'.time()));
          sleep(1);
          array_push($items,array('title'=>'tet'.time()));

          //header('Content-Type: application/json');
          //return json_encode($items);
          return response()->json($items);
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

     $host        = "host=localhost";
     $port        = "port=5432";
     $dbname      = "dbname=mydb";

     $db = pg_connect( "$host $port $dbname user=postgres password=root10"  );
     //$query = "INSERT INTO monitoreo (id_monitoreo,x,y,altura,fecha_evaluacion,tipo) VALUES (".$request['codigo'].",".$request['x'].",".$request['y'].",".$request['altitud'].",date('".$request['fechaevaluacion']."'),'TRUE')";
     $query = "INSERT INTO monitoreo (x,y,altura,fecha_evaluacion,tipo) VALUES (".$request['x'].",".$request['y'].",".$request['altitud'].",date('".$request['fechaevaluacion']."'),'TRUE')";

        $result = pg_query($db, $query);
        return $request['y'];
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
