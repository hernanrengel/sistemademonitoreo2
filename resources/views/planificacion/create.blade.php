@extends('app')

@section('content')

<head>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/scriptPlan.js') }}"></script>
	<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
</head>

<body>
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

		<h1>Planilla de seguimiento y monitoreo</h1>
		<h2>Programa nacional de  forestaci&oacute;n</h2>
		<h3>FASE: PLANIFICACI&Oacute;N </h3>
	
             	<center>
                   <br>
                 <a href="{{ route('planificacion') }}" class="btn btn-primary">CREAR NUEVO PROYECTO </a>
                 <a href="{{ route('proyectos') }}" class="btn btn-primary">LISTADO DE PROYECTOS</a>
                   <br>
            </center>   
		</center>
{!!Form::open(['route'=>'monitoreo.store','method'=>'POST'])!!}
<div class="form-group">
<table>



<table>
	<tr>
		<td><label>Nombre entidad solicitante: </label></td>
		<td><input class="form-control" placeholder="Ingresa nombre de la entidad solicitante" id="nombreentidad" type="text"></td>

	</tr>

	<tr>
		<td><label>Fecha solicitud: </label></td>
		<td><input class="form-control" placeholder="Ingresa fecha de solicitud" id="fechasolicitud" type="date"></td>

	</tr>


	<tr>

		<h3>Ubicación geográfica</h3>
		
	</tr>

	<tr>
		
		<td colspan="2">
			
			<div>
				<br>
				<h3>Datos de los beneficiarios</h3><br><br>

				Departamento:
				<select id='departamento'>
				<option value=''>selec un depto</option>

				@foreach ($departamentos as $departamento)
					<option value='{{$departamento['id_departamento']}}'>{{$departamento['nombre_departamento']}}</option>
				@endforeach
				</select>

				Provincia:
				<select id='provincia'>
				</select>
				<br>
				Municipio:
				<select id='municipio'>
				</select>

		    	Comunidades:
		    	<select id='comunidad' multiple>
		    	</select>
			</div>

		</td>
	</tr>


<tr>
	<td>
	
	</td>
</tr>



<!--tipo de entidad solicitante-->
<tr>
		<td>
		<!--<input type="button" value="jquery radio" id="jquery" onclick="getIdRadioTipoDeEntidad()">-->
		</td>


		<td>
		<br>
		<h3>Tipo de entidad solicitante</h3>
			<br>
			
			<br>
			<!-- GRUPO RADIO  TIPO ENTIDAD SOLICITANTE-->
				<div id="entidadSolicitante">
						<?php

								echo "<table id = 'tablaEntidadSolicitante'>";
								


									$entidades = DB::table('entidad_solicitante')->get();

									foreach ($entidades as $causa)
									{
										echo '<tr><td>'.$causa->entidad_solicitante.'   '.'</td><td><input id = "'.$causa->id_entidad_solicitante.'" name = "entidad_solicitante" type="radio" ></td></tr>';
									}


								echo "</table>";
						?>

				</div>
		</td>

</tr>


<tr>
	<td colspan="2"><br><h3>Datos importantes para la plantaci&oacute;n</h3><br><br></td>
</tr>

	<tr>
		<td><label>Numero de plantines solicitados:</label></td>
		<td><input class="form-control" placeholder="Ingresa n plantines" id="nplantines" type="number"></td>
	</tr>

	<tr>
		<td><label>Numero de estacas solicitadas:</label></td>
		<td><input class="form-control" placeholder="Ingresa n estacas" id="numestacas" type="number"></td>
	</tr>

	<tr>
		<td><label>Superficie proyectada (Ha):</label></td>
		<td><input class="form-control" placeholder="Superficie proyectada" id="superficie" type="number"></td>
</tr>



					<!--Fuentes de abastemiento de agua-->
<tr>
		<td>
		
		<!--<input type="button" value="jquery radio" id="jquery" onclick="getArrayFuenteAgua()">
		<input type="button" value="matrizEspecies" id="jquery" onclick="getMatrizEspecies()">

		-->	
		</td>
		<td>
			<br>
			<br>
			<h3>Fuentes de abastecimienteo de agua</h3>
			<br>
			<br>
			<!-- GRUPO CHECKBOX FUENTES DE ABASTECIMIENTO DE AGUA-->
				<div id="fuentes_de_agua">
						<?php


								echo "<table id = 'tablaFuentesAgua'>";
									$causa_perdidas = DB::table('abastecimiento_agua')->get();
									//$contador=0;
									foreach ($causa_perdidas as $causa)
									{//$contador=$contador+1;

										echo '<tr><td>'.$causa->abastecimiento_agua.'</td><td><input id="'.$causa->id_abastecimiento_agua.'" name = "grupocheckbox" type="checkbox" ></td></tr>';
									}


								echo "</table>";
						?>

				</div>
		</td>
</tr>




<!--TIPO DE PLANTACION PROYECTADA-->

<!--tipo de entidad solicitante-->
<tr>
		<td>
		<!--
				<input type="button" value=" item seleccionado" id="jquery" onclick="getIdRadioTipoDePlantacion()">

	-->
		</td>
		<td>
			<br>
			<br>
			<h3>Tipo de plantaci&oacute;n proyectada</h3>
			<br>
			<br>
			<!-- GRUPO CHECKBOX TIPO PLANTACIONES-->
				<div id="perdida plantaciones">
						<?php


								echo "<table id = 'tablaPlantacionProyectada'>";
								


									$entidades = DB::table('tipo_plantacion')->get();

									foreach ($entidades as $causa)
									{
										echo '<tr><td>'.$causa->tipo_plantacion.'</td><td><input id="'.$causa->id_tipo_plantacion.'" name = "grupocheckbox" type="radio" ></td></tr>';
									}


								echo "</table>";
						?>

				</div>
		</td>

</tr>


	<tr>
		<td><h3>Especies programadas</h3></td>
	</tr>


	<tr>
		<td></td>
		<td>
	<?php
		
		////////////////////////////COMBO BOX SELECCIONAR ESPECIES////////////////////////////////////////	
		echo "<select id = 'especies'>";
	    echo "<option value='x'>Selecciona las especies</option>";

		echo("<BR><BR>");
		$especies = DB::table('especie_estaca')->get();

			foreach ($especies as $especie)
			{
			   // var_dump($especie->nombre_comun);
			    //echo "<BR>".$especie->nombre_comun;
			    echo '<option value = "'.$especie->id_especie_estaca.'" onClick="imprimir();" nombre="'.$especie->nombre_comun.'">'.$especie->nombre_comun.'</option>';
			    echo "<br />\n";
			}
			echo '<option value=0 >Otros</option>';
			echo "</select>";

		//////////////////////////////////////////////////////////////	
			
		//INSERTANDO BOTON AGREGAR
		echo '    <input type="button" onclick="adicionar()" value="Adicionar">';
		//echo '    <input type="button" onclick="getMatrizEspecies()" value="matrizEspecies">';
		//echo '    <input type="button" onclick="getVectorFuentesAgua()" value="getVectorFuentesAgua">';
   ?>



		</td>
	</tr>

	<tr>
		<td>
		</td>		

	    <td id = "contenedorespeciestr">
	    <br><br>
	    	 <b id="numeroDeFilas" class="hola">0</b><b> plantines adicionados</b>
	    		  
			     <!-- TABLA PARA ADICIONAR  ESPECIES-->

			     <table id = "contenedorespecies">
			     </table>
			     	
	     </td>
	</tr>

	
	<tr>
		<td></td>
		<td>	
			<br>
			<center>
			<br>
			<br>
			<input type="button" value=" > REGISTRAR" onclick=" enviarJson() ">
			<br>
			<br>
			</center>
		</td>
		<br>
		
	</tr>

</table>
</div>

<!--                       UN BOTON PARA LANZAR A REGISTRO DE PLANTACION CON ATRIBUTO
{!!link_to_route('registro_plantacion', $title = "Planificacion", $idProyecto = 18, $attributes = ['class'=>'btn btn-primary'])!!}
-->
{!!Form::close()!!}

	<center>
                   <br>
                 <a href="{{ route('planificacion') }}" class="btn btn-primary">CREAR NUEVO PROYECTO </a>
                 <a href="{{ route('proyectos') }}" class="btn btn-primary">LISTADO DE PROYECTOS</a>
                   <br>
    </center>   


            </div>
        </div>
    </div>
</div>

@endsection

</body>