@extends('app')

@section('content')

<div class="container">

    <div class="row row-offcanvas row-offcanvas-left" style=" padding-top: 20px;">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" >
            <div class="list-group">
                <a href="{{ route('ss-uno-uno') }}" class="list-group-item">Instrumentos de Planificación</a>
                <a href="{{ route('ss-uno-dos') }}" class="list-group-item">Instrumentos de Operación</a>
                <a href="{{ route('ss-uno-tres') }}" class="list-group-item">Aprovechamiento de Bosques</a>
                <a href="{{ route('ss-uno-cuatro') }}" class="list-group-item">Restitución de Bosques</a>
                <a href="{{ route('ss-uno-cinco') }}" class="list-group-item">Modelamiento del Potencial Forestal</a>
                <a href="{{ route('ss-uno-seis') }}" class="list-group-item">Certificación Forestal</a>
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
                            <img src="images/su1.jpg" alt="" />
                        </div>
                        <div class="col-md-8 about-right">
                            <h3>FISCALIZACIÓN, CONTROL Y MANEJO DE BOSQUES</h3>
                            <p> Muestra el estado de situación del manejo y aprovechamiento forestal en Bolivia, en cuanto a los derechos forestales otorgados por tipo y actor, las pérdidas de bosque por el uso legal e ilegal, la restitución de bosques, así también del potencial forestal y el desempeño en las actividades de manejo, industria y comercialización de productos del bosque.
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