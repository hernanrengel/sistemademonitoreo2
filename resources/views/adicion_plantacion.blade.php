@extends('app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de plantacion</title>
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
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
                   <h2>Planilla de campo- plantaciones</h2>
                   <center>
                   <br>
                 <a href="{{ route('planificacion') }}" class="btn btn-primary">CREAR NUEVO PROYECTO </a>
                 <a href="{{ route('proyectos') }}" class="btn btn-primary">LISTADO DE PROYECTOS</a>
                   <br>
                 </center>


               

    <div>
        <h3>Datos de plantaciones</h3>
        Institucion. responsable: <input type='text' id=''><br>
        fecha_inicio_plantacion: <input type='date' id='proyecto_fecha_inicio_plantacion'><br>
        fecha_fin_plantacion: <input type='date' id='proyecto_fecha_fin_plantacion'><br>
        Superficie: <input type='text' id='proyecto_superficie_plantada'><br>
    </div>

    <div>
        <h3>Datos de los beneficiarios</h3>
        Departamento:
        <select id='departamento'>
        @foreach ($departamentos as $departamento)
            <option value='{{$departamento['id_departamento']}}'>{{$departamento['nombre_departamento']}}</option>
        @endforeach
        </select>

        Prov:
        <select id='provincia'>
        </select>

        Munic:
        <select id='municipio'>
        </select>

        Comunidades:
            <select id='comunidad' multiple>
            </select>
    </div>

    <div>
        <h3>Tipo de entidad Solicitante</h3>
        {{$entidad_solicitante['entidad_solicitante']}}
    </div>

    <div>
        <h3>Tipo de terreno intervenido</h3>
        @foreach ($tipo_terrenos as $tipo_terreno)
         {{$tipo_terreno['nombre_tipo_terreno']}} <input class='tipo_terreno' type="checkbox" value="{{$tipo_terreno['id_tipo_terreno']}}">
        @endforeach
    </div>

    <div>
        <h3>Fuentes de abastecimiento de agua</h3>
        @foreach ($abastecimiento_aguas as $abastecimiento_agua)
            {{$abastecimiento_agua['abastecimiento_agua']}}
            @if($abastecimiento_agua->seleccionado)
                <input type="checkbox" value="{{$abastecimiento_agua['id_abastecimiento_agua']}}" checked="true">
            @else
                <input type="checkbox" value="{{$abastecimiento_agua['id_abastecimiento_agua']}}">
            @endif
        @endforeach
    </div>

    <div>
        <h3>tipoPlantacion</h3>
        @foreach ($tipo_plantaciones as $tipo_plantacion_aux)
            {{$tipo_plantacion_aux['tipo_plantacion']}}
            @if ($tipo_plantacion-> id_tipo_plantacion== $tipo_plantacion_aux-> id_tipo_plantacion)
                <input type="radio" value="{{$tipo_plantacion_aux['id_tipo_plantacion']}}" checked="true">
            @else
                <input type="radio" value="{{$tipo_plantacion_aux['id_tipo_plantacion']}}">
            @endif
        @endforeach
    </div>

    <div>
        <h3>Participantes</h3>
        <div>
            <select id='tipo_participante'>
            @foreach ($tipo_participantes as $tipo_participante)
                <option value='{{$tipo_participante['id_tipo_participante']}}'>{{$tipo_participante['nombre']}}</option>
            @endforeach
            </select>       
            Total: <input type='text' id='participantes_total'>
            Hombres: <input type='text' id='partcipantes_total_hombre'>
            Mujeres: <input type='text' id='partcipantes_total_mujer'>
            <button  id='adicionar_participante' type='button'>Add participante</button>
        </div>
        <div>
            <table id='participantes'>
                <tr>
                    <th>Tipo</th>
                    <th>Total</th>
                    <th>Hombres</th>
                    <th>Mujeres</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>6</td>
                    <td>2</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>21</td>
                    <td>7</td>
                    <td>3</td>
                </tr>
            </table>
        </div>
    </div>

    <div>
        <h3>Responsable</h3>
        Nombre responsable:
        {{$responsable-> nombre}}
    </div>

    <button  id='enviar' type='submit'>Enviar</button>

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
</html> 