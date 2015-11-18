@extends('app')

@section('content')

<div class="container">
    <div class="row row-offcanvas row-offcanvas-left" style=" padding-top: 20px;">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" >
            <div class="list-group">
                <a href="{{ route('ss-uno-uno') }}" class="list-group-item" >Instrumentos de Planificación</a>
                <a href="{{ route('ss-uno-dos') }}" class="list-group-item" >Instrumentos de Operación</a>
                <a href="{{ route('ss-uno-tres') }}" class="list-group-item" >Aprovechamiento de Bosques</a>
                <a href="{{ route('ss-uno-cuatro') }}" class="list-group-item" >Restitución de Bosques</a>
                <a href="{{ route('ss-uno-cinco') }}" class="list-group-item">Modelamiento del Potencial Forestal</a>
                <a href="{{ route('ss-uno-seis') }}" class="list-group-item" id="activo">Certificación Forestal</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <p class="pull-left visible-xs">
                <button type="button" class="btn btn-primary" id="boton-s-m" data-toggle="offcanvas">SUB MENU</button>
            </p>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="jumbotron" >                     
                 <h2>CERTIFICAIÓN FORESTAL</h2><br>
                    <h5>-INICIATIVAS CON CERTIFICACIÓN FORESTAL <br>
                        -TPFP CON CERTIFICACIÓN
                    </h5>                           
            </div>
        </div>
    </div>
</div>
@endsection