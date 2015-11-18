function verHTML()
{
    var d =document.getElementById("contenedorespecies");
    alert(d.innerHTML);
}


function adicionar()
{	

	// get atributos de la especie seleccionada
    var d=document.getElementById("especies");
    var indice = d.selectedIndex;// indice de la opcion seleccionada
    var textselect=d.options[indice].text;//texto de la opcion seleccionada
    var id_opcion=d.options[indice].value;
   // console.log("El id de la opcioin es "+id_opcion); 

//alert(indice);
    if(indice==0)
    {
    	alert("Seleccione una especie para adicionar a la lista");
    }
//alert(" validando "+validar2(textselect));

	if((indice>0)&&(validar(textselect)==true))
	{	   
					 /////////////////////////////ADICIONANDO FILA INICIAL A LA TABLA//////////////////////
				    if(calcularNFilas()==0 ){
				    var table = document.getElementById("contenedorespecies");

					var tr = document.createElement("tr");
					tr.id=0;
					//row.id=textselect;
					


					var td = document.createElement("TD");
					td.innerHTML='<br><center><label>Especie<br>(nombre común)</label></center><br>';
					tr.appendChild(td);

					
					td = document.createElement("TD");
					td.innerHTML="<center><label># Plantines</label></center>";
					tr.appendChild(td);

					td = document.createElement("TD");
					td.innerHTML="<center><label># Estacas</label></center>";
					tr.appendChild(td);
					table.appendChild(tr);
				    }


    /////////////////////////////////////////////////////////////////////////////////////////

		//Adicionando un plantin a la tablas
		incrementaNFilas();
		var numeroDeplantines=calcularNFilas();
    var d=document.getElementById("contenedorespecies");
 	    // Find a <table> element with id="myTable":
	var table = document.getElementById("contenedorespecies");

	var tr = document.createElement("tr");
	tr.id="e"+numeroDeplantines;
	//row.id=textselect;
	
	var td = document.createElement("TD");

	//cell1.innerHTML = textselect;
	td.innerHTML='<label id="e'+id_opcion+'">'+textselect+'</label>'
	tr.appendChild(td);



// INPUT ALTURA TOTAL
var input1=document.createElement("input");
	input1.type="text";
	//input1.placeholder="Ingresa tasa de sobrevivencia";
	//input1.class="form-control";
	input1.type="number"; 
	input1.size=10;
	//boton1.id=seccionid+"fila"+f;
	input1.id="nplantines";
	
 	td = document.createElement("TD");
	td.appendChild(input1);
	tr.appendChild(td);
	//table.appendChild(tr);

	//cell2.appendChild(input1);
//END INPUT ALTURA TOTAL


// INPUT BIFURCACION
var input2=document.createElement("input");
	input2.type="number";
	input2.size=1;
	input2.id="nestacas";
	input2.size=10;
	td = document.createElement("TD");
	td.appendChild(input2);
	tr.appendChild(td);

//END INPUT BIFURCACION



// EL BOTON ELIMINAR
	var boton1=document.createElement("input");
	boton1.type="button";
	boton1.value="Eliminar";
	boton1.id="e"+numeroDeplantines;
	
	boton1.onclick=function(){eliminaEspecie(this.id);};
	td = document.createElement("TD");
 	td.appendChild(boton1);
	tr.appendChild(td);
	

//END BOTON ELIMINAR


	table.appendChild(tr);//ADICIONANDO LA FILA


}//end if
else{
	alert("La especie "+textselect+ " ya esta adicionada en la lista");
}
//end if y else

}

function eliminaEspecie(texto)
{    


	decrementaNFilas();	
	 var d=document.getElementById("contenedorespecies");
    var hijo=d.firstChild;
     //hijo=hijo.nextSibling;
    //hijo=hijo.firstChild;
    while(hijo!=null)
    {
    	console.log("comparando"+hijo.id+" y " +texto);
    	if(hijo.id==texto)
        {
            var eliminar=document.getElementById(hijo.id);
			var padre=eliminar.parentNode;
			padre.removeChild(eliminar);
            break;
        }
        hijo=hijo.nextSibling;

    }

    if(calcularNFilas()==0){
    	d.innerHTML="";
    }

}


function validar(nombre)
{	var valor = true;
	//alert("validar");
    var d=document.getElementById("contenedorespecies");
    var vd=d.getElementsByTagName("tr");
    for(var i=0; i<vd.length;i++)
    {		//alert(vd[i].firstChild.firstChild.innerHTML+"   "+nombre)
    	    if(vd[i].firstChild.firstChild.innerHTML==nombre){
        	valor=false;
        	break;
        }
    }
   
  return valor;
}

function calcularNFilas()
{	//retorna el numero de plantines en la tabla
	

	var numero;
	var d=document.getElementById("numeroDeFilas");
	numero = parseInt(d.innerHTML); 
	return numero;


}

function incrementaNFilas(){
	//Incrementa mas una unidad el numero de plantines en la tabla
	var d=document.getElementById("numeroDeFilas");
	var numero = parseInt(d.innerHTML)+1;
	d.innerHTML="";	
	d.innerHTML=numero;
}

function numeroDePlantines(){
	var x = document.getElementById("contenedorespecies").lastChild;

	alert(x.id);
	if (typeof(x.id) == "undefined") //true
	{
		alert("variable indefinida");
	}
}
function decrementaNFilas(){
	//Incrementa mas una unidad el numero de plantines en la tabla
	var d=document.getElementById("numeroDeFilas");
	var numero = parseInt(d.innerHTML)-1;
	d.innerHTML="";	
	d.innerHTML=numero;
}




function getIdRadioTipoDeEntidad(){
	//retorna el id del registro que esta activado
	var idTipoEntidad=-1;
	var inputradio;
    var d=document.getElementById("tablaEntidadSolicitante");
    var vd=d.getElementsByTagName("tr");
    for(var i=0; i<vd.length;i++)
    {		

    		inputradio=vd[i].lastChild;

    		if(inputradio.firstChild.checked)
    	    {
    	    	idTipoEntidad=inputradio.firstChild.id;
    	    	break;
    	    }
        	       
    }
  // alert("Enviando id "+idTipoEntidad);
    return idTipoEntidad;
}

function getIdRadioTipoDePlantacion(){
	//retorna el id del registro que esta activado
	var idTipoEntidad=-1;
	var inputradio;
    var d=document.getElementById("tablaPlantacionProyectada");
    var vd=d.getElementsByTagName("tr");
    for(var i=0; i<vd.length;i++)
    {		

    		inputradio=vd[i].lastChild;

    		if(inputradio.firstChild.checked)
    	    {
    	    	idTipoEntidad=inputradio.firstChild.id;
    	    	break;
    	    }
        	       
    }
  // alert("Enviando id "+idTipoEntidad);
    return idTipoEntidad;
}

function getArrayFuenteAgua(){
  var vector = new Array();
  	var idTipoEntidad=-1;
 	var d=document.getElementById("tablaFuentesAgua");
    var vd=d.getElementsByTagName("tr");
    var contador=0;
    for(var i=0; i<vd.length;i++)
    {		

    		inputradio=vd[i].lastChild;

    		if(inputradio.firstChild.checked)
    	    {	
    	    	idTipoEntidad=inputradio.firstChild.id;
    	    	vector[contador]=idTipoEntidad;
    	    	//alert("Enviando "+vector[contador]);
    	    	contador=contador+1;
    	    	
    	    }
        	       
    }


  return vector;
}

function getMatrizEspecies(){
	 
        var especies=[];
        
	 		
			var inputradio;
		    var d=document.getElementById("contenedorespecies");
		    var vd=d.getElementsByTagName("tr");
		    var td;
		    for(var i=1; i<vd.length;i++)
		    {		td=vd[i].getElementsByTagName("td")
		    		//console.log("id :"+td[0].firstChild.id+"  "+td[0].firstChild.innerHTML+" "+td[1].firstChild.value+" "+td[2].firstChild.value);
					especies.push({id_especie:td[0].firstChild.id.substr(1,td[0].firstChild.id.length),
						nombre_comun:td[0].firstChild.innerHTML,
						num_plantines:td[1].firstChild.value,
						num_estacas:td[2].firstChild.value
					});
					console.log(td[0].firstChild.id.substr(1,td[0].firstChild.id.length)+"  "+td[0].firstChild.innerHTML +" "+td[1].firstChild.value+" "+td[2].firstChild.value)
		        	       
		    }

		//console.log("especies OK"+especies);    
        return especies;
}

function getVectorFuentesAgua(){
	   var fuentesDeAgua=[];
       var tabla=document.getElementById("tablaFuentesAgua");
	   var tr=tabla.getElementsByTagName("tr");

	for (var i = 0; i < tr.length; i++) {
		
		//console.log(tr[i].lastChild.firstChild.id+" "+tr[i].firstChild.innerHTML);



    		if(tr[i].lastChild.firstChild.checked)
    	    {	
	    	    fuentesDeAgua.push({id_fuentes_de_agua:tr[i].lastChild.firstChild.id,
								nombre:tr[i].firstChild.innerHTML	
								

				})
	    	    	console.log("Enviando "+tr[i].lastChild.firstChild.id)
	    	    	//break;

    	    }




	}//end for
	return fuentesDeAgua;
}

function enviarJson(){
			//alert("Hola mundo");
 		var comunidades= [];
        $( "select#comunidad option:selected" ).each(function() {
            comunidades.push($( this ).val());
        });

      

        console.log("Comunidades"+comunidades)

        console.log(document.getElementById("fechasolicitud").value);
        console.log(document.getElementById("nplantines").value);
		console.log(document.getElementById("numestacas").value);
		console.log(document.getElementById("superficie").value);

	var planificacion={
		nombreEntidad:document.getElementById("nombreentidad").value,
		fechasolicitud:document.getElementById("fechasolicitud").value,
		comunidades:comunidades,
		fuentesDeAgua:getVectorFuentesAgua(),
		idTipoEntidad: getIdRadioTipoDeEntidad(),
		idTipoPlantacion:getIdRadioTipoDePlantacion(),
		numPlantines:document.getElementById("nplantines").value,
		numEstacas:document.getElementById("numestacas").value,
		superficieProyectada:document.getElementById("superficie").value,
		especies:getMatrizEspecies()
	}

		console.log("Intentando AJAX")

            // var cadena = cadenaFormulario();
        $.ajax({
            contentType: "application/json",
            data: planificacion,
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            success: function (r) {
               // console.log(r.parametro+"respuesta");
               //	console.log(r.fechasolicitud+"respuesta");
                alert("Formulario registrado");
            },
            error: function(r) {
                console.log();
                alert("Alguno(s) campos estan en blanco");
            },
            type: "GET",
            url: "envplanificacion"
        });


}