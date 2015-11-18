<head>
  <!--<script src="script.js" language="javascript" type="text/javascript"></script>-->
  <script type="text/javascript" src="{{ URL::asset('js/scriptppm.js') }}"></script>
</head>

<body bgcolor="#E6E6FA" id="idCuerpo">
<input type="button" onclick="verHTML()" value="Ver codigo de la pagina">
<br>
<center>
<h1>Planilla de seguimiento y monitoreo</h1>
<h2>Programa nacional de  forestaci&oacute;n</h2>
<h3>FASE: POST-PLANTACI&Oacute;N </h3>

<h3>Levantamiento de datos  en unidades  de parcelas permanentes de muestreo</h3>
</center>
{!!Form::open(['route'=>'monitoreo.store','method'=>'POST'])!!}
<div class="form-group">
<table>


  <tr>
    <td></td>
    <td>
  <?php
    
    ////////////////////////////COMBO BOX//////////////////////////////////////// 
    echo "<select id = 'especies'>";
      echo "<option value='x'>Selecciona las especies</option>";

    echo("<BR><BR>");
    $especies = DB::table('especie_estaca')->get();

      foreach ($especies as $especie)
      {
         // var_dump($especie->nombre_comun);
          //echo "<BR>".$especie->nombre_comun;
          echo '<option value = "'.$especie->id_especie_estaca.'" onClick="imprimir();" nombre="'.$especie->nombre_comun.'">'.$especie->nombre_comun.'</option>';
          echo "<br />\n";
      }
      echo '<option value=0 >Otros</option>';
      echo "</select>";

    //////////////////////////////////////////////////////////////  
      
    //    INSERTANDO BOTON AGREGAR
    echo '    <input type="button" onclick="adicionar()" value="Adicionar">';
    echo '    <br>(Seleccione una especie y adicione el elemento a la lista)';

    ?>



    </td>
  </tr>
  <tr>
    <td>
      Muestreo aleatorio 6 meses a 1 año
    </td>   

       <td id = "contenedorespeciestr">
       <br><br>
         <b id="numeroDeFilas" class="hola">0</b><b> plantines adicionados</b>
            
           <!-- TABLA PARA ADICIONAR  ESPECIES-->
           <table id = "contenedorespecies">
           </table>
            
       </td>
  </tr>

  <tr>
    <td>
      
    </td>
    <td>
      <br>
      <br>
      Causas de p&eacute;rdida de plantaciones
      <br>
      <br>
      <!-- GRUPO CHECKBOX PERDIDA DE PLANTACIONES-->
        <div id="perdida plantaciones">
            <?php


                echo "<table id = 'id_perdida_plantaciones'>";
                


                  $causa_perdidas = DB::table('causa_perdida')->get();

                  foreach ($causa_perdidas as $causa)
                  {
                    echo '<tr><td>'.$causa->causa_perdidas.'</td><td><input name = "grupocheckbox" type="checkbox" ></td></tr>';
                  }


                echo "</table>";
            ?>

        </div>
    </td>
  </tr>
    
  <tr>
    <td></td>
    <td>    <br>
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}</td>
  </tr>

</table>
</div>

{!!Form::close()!!}
</body>