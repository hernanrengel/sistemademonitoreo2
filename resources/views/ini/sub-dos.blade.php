@extends('app')
@section('content')

<div class="container">

    <div class="row row-offcanvas row-offcanvas-left" style=" padding-top: 20px;">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" >
            <div class="list-group">
                <a href="{{ route('ss-dos-uno') }}" class="list-group-item">Cobertura de Bosques</a>
                <a href="{{ route('ss-dos-dos') }}" class="list-group-item">Forestación/ Reforestación</a>
                <a href="{{ route('ss-dos-tres') }}" class="list-group-item">Inventarrio nacional de Bosques</a>
                <a href="{{ route('ss-dos-cuatro') }}" class="list-group-item">Riesgos en bosques</a>
                
            </div>
        </div><!--/.sidebar-offcanvas-->
        <div class="col-xs-12 col-sm-9">
            <p class="pull-left visible-xs">
                <button type="button" class="btn btn-primary" id="boton-s-m" data-toggle="offcanvas">SUB MENU</button>
            </p>
        </div><!--/.sidebar-offcanvas-->
        <div class="col-xs-12 col-sm-9">
            <div class="jumbotron" >
                <div id="about" class="about">
                    {{-- container --}}

                    <div class="about-grids">
                        <div class="col-md-4 about-left" id="circulo" >
                            <img src="images/ls_1.png" alt="" />
                        </div>
                        <div class="col-md-8 about-right">
                            <h3>MONITOREO Y OBSERVACIÓN DE BOSQUES</h3>
                            <p> Muestra el estado de situación de los bosques naturales y plantaciones forestales en cuanto a cobertura y tipo, la pérdida por causas de deforestación, degradación y fragmentación de bosques, así también de los resultados de la forestación y reforestación en el marco del Programa “Mi Árbol”, del potencial integral a través de un Inventario Nacional de Bosques, así también de los riesgos y amenazas como focos de calor, incendios, inundaciones y sequías en bosques.
                            </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
                {{-- //container --}}
            </div>

        </div><!--/.col-xs-12.col-sm-9-->
    </div>

</div><!--/.container-->

@endsection

