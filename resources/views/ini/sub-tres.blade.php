@extends('app')

@section('content')

<div class="container">

    <div class="row row-offcanvas row-offcanvas-left" style=" padding-top: 20px;">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" >
            <div class="list-group">
                <a href="{{ route('ss-tres-uno') }}" class="list-group-item">Indicadores conjuntos de mitigación y adaptación</a>
                <a href="{{ route('ss-tres-dos') }}" class="list-group-item">Seguimiento a la adscripción</a>
                <a href="{{ route('ss-tres-tres') }}" class="list-group-item">Sistemas de vida</a>
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
                        <div class="col-md-4 about-left" id="circulo"style="max-width: 150px;">
                            <img src="images/ls_3.png" alt="" />
                        </div>
                        <div class="col-md-8 about-right">
                            <h3>BOSQUES Y CAMBIO CLIMÁTICO</h3>
                            <p> En un contexto de mitigación y adaptación conjunta ante el cambio climático se muestra los logros de la promoción del manejo integral y sustentable de los bosques. Se puede observar la sistematización de iniciativas con éste enfoque, algunos indicadores conjuntos de mitigación y adaptación, así también el seguimiento a la gobernanza, procesos participativos, concertación de acuerdos locales, y al apoyo integral y el monitoreo a las funciones ambientales y sistemas de vida de bosques, con un enfoque de no mercantilización de las funciones ambientales.
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

