<head>
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/paginacionJson.js') }}"></script>
</head>

<body>
<br>
<h1>
	Proyectos de planificación
</h1>
<table bgcolor="#E6E6FA" border="1">
	
	<thead>
		<td>
			<b>Código de el proyecto</b>
		</td>

		<td>
			<b>Nombre entidad solicitante</b>
		</td>

		<td>
			<b>id entidad tipo solicitante</b>
		</td>
		<td>
			<b>Numero de plantines solicitados</b>
		</td>
		<td>
			<b>Numero de estacas solicitadas</b>
		</td>

	</thead>
	 @foreach ($planificacion as $planificacionsimple)
       <tr>
       	<td>
       		{{ $planificacionsimple->id_proyecto }}
       	</td>
       	
       	<td>
       		{{$planificacionsimple->nombre_institucion_solicitante}}
       		<br>hola
       		{!! link_to_route('planificacion', $title = "hola mundo")!!}
       		{!! link_to_action('PlanificacionController@ver', $title = "Hola")!! }
       	</td>

       	<td>
     
       		{{$planificacionsimple->id_entidad_solicitante}}
       	
       	</td>
       	<td>
       		{{$planificacionsimple->numero_plantines_solicitados}}
       	</td>
       	<td>
       		{{$planificacionsimple->numero_estacas_solicitados}}
       	</td>
       </tr>
        
        
    @endforeach

</table>

   
{!! $planificacion->render() !!}
</body>