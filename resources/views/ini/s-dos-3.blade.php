@extends('app')

@section('content')

<div class="container">

    <div class="row row-offcanvas row-offcanvas-left" style=" padding-top: 20px;">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" >
            <div class="list-group">
                 <a href="{{ route('ss-dos-uno') }}" class="list-group-item" >Cobertura de Bosques</a>
                <a href="{{ route('ss-dos-dos') }}" class="list-group-item" >Forestación/ Reforestación</a>
                <a href="{{ route('ss-dos-tres') }}" class="list-group-item" id="activo">Inventarrio nacional de Bosques</a>
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
                 <h2>INVENTARIO NACIONAL DE BOSQUES</h2><br>
                    <h5>- INVENTARIOS FORESTALES <br>
                        - BIOMASA <br>
                        - ABSORCIÓN DE CARBONO
                    </h5>                           
            </div>
        </div>
    </div>
</div>
@endsection


