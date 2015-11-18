@extends('app')

@section('content')

<div class="container">

    <div class="row row-offcanvas row-offcanvas-left" style=" padding-top: 20px;">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" >
            <div class="list-group">
                <a href="#" class="list-group-item" id="activo">Instrumentos de Planificación</a>
                <a href="#" class="list-group-item">Instrumentos de Operación</a>
                <a href="#" class="list-group-item">Aprovechamiento de Bosques</a>
                <a href="#" class="list-group-item">Restitución de Bosques</a>
                <a href="#" class="list-group-item">Modelamiento del Potencial Forestal</a>
                <a href="#" class="list-group-item">Certificación Forestal</a>
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
                                <p> - CONERTURA DE BOSQUES <br>
                                    - FORESTACIÓN / REFORESTACIÓN <br>
                                    - INVENTARIO NACIONAL DE BOSQUES <br>
                                    - RIESGOS EN BOSQUES
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                    {{-- //container --}}
                </div>

            <div class="row">
                <div class="col-xs-6 col-lg-4">
                    <h2>Columna Uno</h2>
                    <p>Contenido </p>
                    <p><a class="btn btn-default" href="#" role="button">Ver Detalles &raquo;</a></p>
                </div><!--/.col-xs-6.col-lg-4-->
                <div class="col-xs-6 col-lg-4">
                    <h2>Columna Dos</h2>
                    <p>Contenido </p>
                    <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
                </div><!--/.col-xs-6.col-lg-4-->

            </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
    </div>

</div><!--/.container-->

@endsection