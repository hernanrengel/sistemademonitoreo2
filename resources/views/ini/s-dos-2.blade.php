@extends('app')

@section('content')

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
                 <h2>FORESTACIÓN / REFORESTACIÓN</h2><br>
                     <center><br>
                 <a href="{{ route('planificacion') }}" class="btn btn-primary">CREAR NUEVO PROYECTO </a>
                 <a href="{{ route('proyectos') }}" class="btn btn-primary">LISTADO DE PROYECTOS</a>
                   <br>
                   </center>
                    <h5>El módulo de forestación/reforestación es parte del Subsistema de Monitoreo y Observación de Bosques. El objetivo es realizar el seguimiento y monitoreo sistemático a la planificación, acciones y resultados de plantaciones forestales, en cuanto a la consolidación de áreas reforestadas y forestadas, en todos sus fines de conservación, recuperación, protección, ornamentación, comercialización, uso de sistemas agroforestales y otros, y así facilitar a las entidades ejecutoras para orientar su planificación estratégica y sus respectivos ajustes para el logro de sus metas y en general a la población boliviana para que conozca los alcances y logros de estas plantaciones en el marco del Programa “Mi Árbol”. 
                    </h5> 

                                              
            </div>
        </div>
    </div>
</div>

@endsection

