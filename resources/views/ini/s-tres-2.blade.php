@extends('app')

@section('content')

<div class="container">

    <div class="row row-offcanvas row-offcanvas-left" style=" padding-top: 20px;">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" >
            <div class="list-group">
                <a href="{{ route('ss-tres-uno') }}" class="list-group-item" >Indicadores conjuntos de mitigación y adaptación</a>
                <a href="{{ route('ss-tres-dos') }}" class="list-group-item"id="activo">Seguimiento a la adscripción</a>
                <a href="{{ route('ss-tres-tres') }}" class="list-group-item">Sistemas de vida</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <p class="pull-left visible-xs">
                <button type="button" class="btn btn-primary" id="boton-s-m" data-toggle="offcanvas">SUB MENU</button>
            </p>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="jumbotron" >                     
                 <h2>SEGUIMIENTO A LA ADSCRIPCIÓN</h2><br>
                    <h5> - REGISTRO DE INICIATIVAS <br>
                         - CINCO ÁMBITOS <br>
                               + GOBERNANZA<br>
                              + ORDENAMIENTO<br>
                              + CONCENTRACIÓN<br>
                              + APOYO INTENGRAL
                    </h5>                           
            </div>
        </div>
    </div>
</div>
@endsection