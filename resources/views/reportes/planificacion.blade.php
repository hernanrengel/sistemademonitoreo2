@extends('app')

@section('content')


<!DOCTYPE html>
<html>

<head>
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/paginacionJson.js') }}"></script>
</head>

<body bgcolor="#E6E6E5">

<div class="container">

    <div class="row row-offcanvas row-offcanvas-left" style=" padding-top: 20px;">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" >
            <div class="list-group">
                 <a href="{{ route('ss-dos-uno') }}" class="list-group-item" >Cobertura de Bosques</a>
                <a href="{{ route('ss-dos-dos') }}" class="list-group-item" id="activo">Forestación/ Reforestación</a>
                <a href="{{ route('ss-dos-tres') }}" class="list-group-item">Inventarrio nacional de Bosques</a>
                <a href="{{ route('ss-dos-cuatro') }}" class="list-group-item">Riesgos en bosques</a>
             </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <p class="pull-left visible-xs">
                <button type="button" class="btn btn-primary" id="boton-s-m" data-toggle="offcanvas">SUB MENU</button>
            </p>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="jumbotron" >


<center>
<div class="container">

<br>
<h1>
	Proyectos de planificación
</h1>

                       
<BR>
<BR>
	<center>
                   <br>
                 <a href="{{ route('planificacion') }}" class="btn btn-primary">CREAR NUEVO PROYECTO </a>
                 <a href="{{ route('proyectos') }}" class="btn btn-primary">LISTADO DE PROYECTOS</a>
                   <br>
            </center>   
<br>
<br>
<table bgcolor="#E6E6FA" border="1">
	
	<thead>
		<td>
			<b>Código de el proyecto</b>
		</td>

		<td>
			<b>Nombre entidad solicitante</b>
		</td>

		<td>
			<b>Tipo de entidad solicitante</b>
		</td>
		<td>
			<b>Numero de plantines solicitados</b>
		</td>
		<td>
			<b>Numero de estacas solicitadas</b>
		</td>
		<td>
			<b>REGISTRAR<BR>PLANTACIÓN</b>
		</td>

	</thead>

	<?php 
	
    foreach( $planificacion as $value ) 
		{  echo "<tr>";
		   echo "<td>".$value->id_proyecto."</td>" ;
		   echo "<td>".$value->nombre_institucion_solicitante."</td>" ;
		   
		   $id=$value->id_entidad_solicitante;

		   $entidad = DB::table('entidad_solicitante')->where('id_entidad_solicitante', $id)->value('entidad_solicitante');
		   echo "<td>".$entidad."</td>" ;
		   echo "<td>".$value->numero_plantines_solicitados."</td>" ;
		   echo "<td>".$value->numero_estacas_solicitados."</td>" ;
		   echo "<td>";
		   echo link_to_route('registro_plantacion', $title = 'Registrar', $idProyecto = $value->id_proyecto, $attributes = ['class'=>'btn btn-success']);
		   //echo  link_to_route('planificacion', $title = "hola mundo");
       		//{!! link_to_action('PlanificacionController@ver', $title = "Hola")!! }
		   echo "</td>";
		   echo "</tr>";

		}
	 ?>
	     



	 
      
     

</table>

   
{!! $planificacion->render() !!}


</div>
               <!--
                <a href="{{ route('planificacion') }}" class="list-group-item">	CREAR NUEVO PROYECTO</a>
				-->
					<center>
                   <br>
                 <a href="{{ route('planificacion') }}" class="btn btn-primary">CREAR NUEVO PROYECTO </a>
                 <a href="{{ route('proyectos') }}" class="btn btn-primary">LISTADO DE PROYECTOS</a>
                   <br>
            </center>   


</center>


            </div>
        </div>
    </div>
</div>

@endsection



</body>
</html>




