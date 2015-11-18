@extends('app')

@section('content')

    <div id="titulo">
        <b> Sistema de Monitoreo Hol&iacutestico e Integral de Bosques</b><br>
    </div>
    {{--  Galeria principal--}}
    
    <div class="row">
      <div class="col-md-8">
            <div class="slider1" style="width: 95%; 
                               margin: 0 auto;">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider1">
                        <li>
                            <img src="images/1.jpg" alt=""/>
                            <div class="caption caption1">
                                <h2></h2>
                            </div>
                        </li>
                        <li>
                            <img src="images/2.jpg" alt=""/>
                            <div class="caption caption1">
                                <h2></h2>
                            </div>
                        </li>
                        <li>
                            <img src="images/3.jpg" alt=""/>
                            <div class="caption caption1">
                                <h2>Bolivia</h2>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

      </div>
     {{-- // Galeria principal--}}
     {{-- Noticias--}}
      <div class="col-md-4">
            <div class="list-group" style="width: 95%; 
                               margin: 0 auto;">
                <h5 class="list-group-item" id="activo">REDES SOCIALES</h5>
              <!--  <a href="#" class="list-group-item">NOTICIA UNO</a>
                <a href="#" class="list-group-item">INOTICIA DOS</a>
                <a href="#" class="list-group-item">NOTICIA TRES</a>
                <a href="#" class="list-group-item">NOTICIA CUATRO </a>
                <a href="#" class="list-group-item">NOTICIA CINCO</a>
                <a href="#" class="list-group-item">NOTICIA SEIS</a>}}-->
            </div>
            <div >
                <div class="icons" >
                    <ul>
                        <li><a href="#" class="facebook"> </a></li>
                        <li><a href="#" class="facebook twitter"> </a></li>
                        <li><a href="#" class="facebook chrome"> </a></li>
                        <li><a href="#" class="facebook dribbble"> </a></li>
                    </ul>
                </div>
            </div>

      </div>
    </div>

    {{-- Proyecto --}}

    <div id="services" class="banner-bottom">
        {{-- container --}}
        <div class="container">

            <div class="banner-bottom-grids">
                <div class="col-md-4 banner-bottom-grid">
                    <a  href="{{ route('s-uno') }}">
                        <div class="services-icon" id="bag">                        
                            <span aria-hidden="true"></span>                        
                        </div>
                    </a> 
                    <h4>Fiscalización, control y manejo de Bosques</h4>
                    <p>Descripci&oacuten del primer Subsistema. </p>
                </div>
                <div class="col-md-4 banner-bottom-grid red">
                    <a  href="{{ route('s-dos') }}">
                        <div class="services-icon" id="bag2">
                            <span c aria-hidden="true"></span>
                        </div>
                    </a> 
                    <h4>Monitoreo y Observación de Bosques</h4>
                    <p>Descripci&oacuten del Segundo Subsistema. </p>
                </div>
                <div class="col-md-4 banner-bottom-grid green">
                    <a  href="{{ route('s-tres') }}">
                        <div class="services-icon" id="bag3">
                            <span  aria-hidden="true"></span>
                        </div>
                    </a> 
                    <h4>Bosques y cambio Climático</h4>
                    <p>Descripci&oacuten del Tercer Subsistema. </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        {{-- //container --}}

        {{--medio--}}
        <div id="about" class="about">
            <div class="row" style="padding-left: 4em;">
                <div class="col-xs-3 blog-art-pic"> <a href="http:\\www.emagua.gob.bo/"><img src="images/emagua2.png" alt="" /></a> </div>
                <div class="col-xs-3 blog-art-pic"> <a href="http:\\www.fonabosque.gob.bo/"><img src="images/fonabosque2.png" alt="" /></a> </div>
                <div class="col-xs-3 blog-art-pic"> <a href="http:\\www.madretierra.gob.bo/"><img src="images/apmt2.png" alt="" /></a> </div>
                <div class="col-xs-3 blog-art-pic"> <a href="http:\\www.abt.gob.bo/"><img src="images/abt.png" alt="" /></a> </div>
            </div>
        </div>
        {{--//medio--}}
    </div>
    {{-- //Proyecto --}} 
                {{-- about --}}
                <div id="about" class="about">
                    {{-- container --}}
                    <div class="container">
                        <div class="about-grids">
                            <div class="col-md-4 about-left blog-art-pic2" style="max-width: 100%;">
                                <img src="images/suri2.jpg" alt="" />
                            </div>
                            
                               <div class="col-md-8" id="titulo">
                                <h3>Cuidar y Proteger a Nuestra Madre Tierra</h3>
                                {{--<p>Descripcion del proyecto.</p>--}}
                               </div>
                         
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                    {{-- //container --}}
                </div>
                {{-- //about --}}
    <br>
    <section class="estilo2">
        <h4> Proyecto de Apoyo al Mecanismo Conjunto en Acciones de Mitigaci&oacuten al Cambio Clim&aacutetico en los Bosques de Bolivia  <b>UNJP/BOL/045/UNJ  <a href="#url"> Ver aqui.</a></b></h4>
    </section>

@endsection