<!DOCTYPE html>
<html lang="es" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Elizabeth Orozco Apaza">

    <title>@yield('title', 'PROYECTO')</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset ('css/responsive.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset ('css/style2.css') }}">
   
    <link rel="stylesheet" href="{{ asset ('css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset ('font-awesome/css/font-awesome.css') }}" >
    <link href="css/offcanvas.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
    <script src="js/menu.js" type="text/javascript"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="background-main no-js">

<div class="container2">

    {{--cabecera--}}
    <div class="blog-art-pic">
        <img src="images/cab.png" alt="" />
    </div>
    {{--//cabecera--}}
    {{--menu--}}
    <div class="mainWrap">
        <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>
        <nav>
            <ul class="menu">
                <li><a href="{{ route('index') }}"><i class="icon-home"></i>INICIO</a></li>
                <li><a  href="{{ route('s-uno') }}"></i>FISCALIZACIÓN Y CONTROL DE BOSQUES</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('ss-uno-uno') }}">Instrumentos de planificación</a></li>
                        <li><a href="{{ route('ss-uno-dos') }}">Instrumentos de operación</a></li>
                        <li><a href="{{ route('ss-uno-tres') }}">Desmonte de bosques</a></li>
                        <li><a href="{{ route('ss-uno-cuatro') }}">Restitución de bosques</a></li>
                        <li><a href="{{ route('ss-uno-cinco') }}">Modelamiento del potencial forestal</a></li>
                        <li><a href="{{ route('ss-uno-seis') }}">Certificación forestal</a></li>
                    </ul>

                </li>


                <li><a  href="{{ route('s-dos') }}"></i>MONITOREO Y OBSERVACIÓN DE BOSQUES</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('ss-dos-uno') }}">Cobertura de bosques</a></li>
                        <li><a href="{{ route('ss-dos-dos') }}">Forestación/ Reforestación</a></li>
                        <li><a href="{{ route('ss-dos-tres') }}">Inventarrio nacional de bosques</a></li>
                        <li><a href="{{ route('ss-dos-cuatro') }}">Riesgos en bosques</a></li>

                    </ul>
                </li>
                <li><a  href="{{ route('s-tres') }}"></i>BOSQUES Y CAMBIO CLIMÁTICO</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('ss-tres-uno') }}">Indicadores conjuntos de mitigación y adaptación</a></li>
                        <li><a href="{{ route('ss-tres-dos') }}">Seguimiento a la adscripción</a></li>
                        <li><a href="{{ route('ss-tres-tres') }}">Sistemas de vida</a></li>
                    </ul>
                </li>
                <li><a  href="{{ route('geo-p') }}"></i>GEOPORTAL</a>
            </ul>
        </nav>
    </div>
  {{--//menu--}}

    @yield('content')
    <hr />

    <div class="foot">
        <div class="blog-art-pic">
            <img src="images/pie.png" alt="" />
        </div>
        <section class="estilo1">
            <marquee onmouseout="this.start()" onmouseover="this.stop()" behavior="scroll" scrollamount="3">
                <a id="pie2" target="_blank" href="http://www.bolivia.gob.bo/"> Estado Plurinacional de Bolivia</a> &#124;
                <a id="pie2" target="_blank" href="http://www.mmaya.gob.bo/"> Ministerio de Medio Ambiente y Agua</a> &#124;
                <a id="pie2" target="_blank" href="www.madretierra.gob.bo/"> Autoridad Plurinacional de la Madre Tierra</a> &#124;
                <a id="pie2" target="_blank" href="http://www.abt.gob.bo/"> Autoridad de Fiscalizaci&oacuten y Control Social de Bosques y Tierra</a> &#124;
                <a id="pie2" target="_blank" href="http://www.ruralytierras.gob.bo/"> Ministerio de Desarrollo Rural y Tierras</a> &#124;
                <a id="pie2" target="_blank" href="www.fao.org/"> Organizaci&oacuten de las Naciones Unidas para la Alimentaci&oacuten y la Agricultura FAO</a> &#124;
                <a id="pie2" target="_blank" href="http://www.planificacion.gob.bo/"> Ministerio de Planificaci&oacuten del Desarrollo</a> &#124;
            </marquee>
        </section>
    </div>
    <footer><center>© 2015 All rights reserved</center></footer>
</div>

{{-- Scripts --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/offcanvas.js"></script>

<script>
    $(function () {
        $("#slider1").responsiveSlides({
            auto: true,
            speed: 500,
            namespace: "callbacks",
            pager: true
        });
    });
</script>
@yield('scripts')
</body>
</html>