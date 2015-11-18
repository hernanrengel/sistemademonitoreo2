function verHTML()
{
    var d =document.getElementById("contenedorespecies");
    alert(d.innerHTML);
}


function imprimir()
{
    
    alert("Hola mundo desde JavaScript");
}

function adicionar()
{
    var d=document.getElementById("especies");
   
    var indice = d.selectedIndex;// indice de la opcion seleccionada

    var textselect=d.options[indice].text;//texto de la opcion seleccionada

    // Imprime el indice selccionado con el texto correspondiente
    //alert(indice+"  el texto es : "+ d.options[indice].text);


    /////////////////////////////ADICIONANDO FILA INICIAL A LA TABLA//////////////////////
    if(calcularNFilas()==0 ){
    var table = document.getElementById("contenedorespecies");

	var tr = document.createElement("tr");
	tr.id=0;
	//row.id=textselect;
	
	var td = document.createElement("TD");
	td.innerHTML='Especie<br>(nombre común)';
	tr.appendChild(td);

	
	td = document.createElement("TD");
	td.innerHTML="DAP<br>cm";
	tr.appendChild(td);

	td = document.createElement("TD");
	td.innerHTML="Calidad";
	tr.appendChild(td);


	td = document.createElement("TD");
	td.innerHTML="Altura<br>total (m)";
	tr.appendChild(td);

	td = document.createElement("TD");
	td.innerHTML="Altura<br>fuste (m)";
	tr.appendChild(td);


	td = document.createElement("TD");
	td.innerHTML="Estado<br>fotosanitario";
	tr.appendChild(td);

	td = document.createElement("TD");
	td.innerHTML="Labores silviculturales";
	tr.appendChild(td);

	td = document.createElement("TD");
	td.innerHTML="Observaciones";
	tr.appendChild(td);


	table.appendChild(tr);


    }
    /////////////////////////////////////////////////////////////////////////////////////////


    if(indice==0)
    {
    	alert("Seleccione una especie para adicionar a la lista");
    }

	if(indice>0)
	{	
		//Adicionando un plantin a la tablas
		incrementaNFilas();
		var numeroDeplantines=calcularNFilas();
    var d=document.getElementById("contenedorespecies");
 	    // Find a <table> element with id="myTable":
	var table = document.getElementById("contenedorespecies");

	var tr = document.createElement("tr");
	tr.id=""+numeroDeplantines;
	//row.id=textselect;
	
	var td = document.createElement("TD");

	//cell1.innerHTML = textselect;
	td.innerHTML=textselect
	tr.appendChild(td);



// INPUT ALTURA TOTAL
var input1=document.createElement("input");
	input1.type="text";
	//input1.placeholder="Ingresa tasa de sobrevivencia";
	//input1.class="form-control";
	input1.type="number"; 
	input1.size=3;
	//boton1.id=seccionid+"fila"+f;
	input1.id="altura";
	
 	td = document.createElement("TD");
	td.appendChild(input1);
	tr.appendChild(td);
	//table.appendChild(tr);

	//cell2.appendChild(input1);
//END INPUT ALTURA TOTAL


// INPUT BIFURCACION
var input2=document.createElement("input");
	input2.type="text";
	//input2.placeholder="Ingresa tasa de mortandad";
	//input2.class="form-control";
	input2.size=1;
	input2.type="number";
	//boton1.id=seccionid+"fila"+f;
	input2.id="bifurcacion";
	
	input2.size=1;
	
	td = document.createElement("TD");
	td.appendChild(input2);
	tr.appendChild(td);
	//table.appendChild(tr);

	//cell3.appendChild(input2);
//END INPUT BIFURCACION

// INPUT INCLINACION
var input3=document.createElement("input");
	input3.type="number";
	//input3.placeholder="Ingresa causa de mortandad";
	//input3.class="form-control";
	input3.type="number";
	
	input3.size=1;	
	input3.id="inclinacion";
	
	td = document.createElement("TD");
	td.appendChild(input3);
	tr.appendChild(td);

//END INPUT INCLINACION

// INPUT DAÑO MECANICO
var input4=document.createElement("input");
	input4.type="number";
	//input3.placeholder="Ingresa causa de mortandad";
	//input4.class="form-control";

	input4.size=1;
	input4.id="daniomecanico";
	
	td = document.createElement("TD");
	td.appendChild(input4);
	tr.appendChild(td);

//END INPUT DAÑO MECANICO


// INPUT ESTADO FOTOSANITARIO
var input5=document.createElement("input");
	input5.type="number";
	//input3.placeholder="Ingresa causa de mortandad";
	//input3.class="form-control";
	
	input5.size=1;
	//boton1.id=seccionid+"fila"+f;
	input5.id="estadofotosanitario";
	
	td = document.createElement("TD");
	td.appendChild(input5);
	tr.appendChild(td);

//	cell6.appendChild(input5);
//END INPUT ESTADO FOTOSANITARIO



// INPUT MORTALIDAD
var input6=document.createElement("input");
	input6.type="number";
	//input3.placeholder="Ingresa causa de mortandad";
	//input6.class="form-control";

	input6.id="mortalidad";
	
	td = document.createElement("TD");
	td.appendChild(input6);
	tr.appendChild(td);
//END INPUT MORTALIDAD


// INPUT EVALUACION GENERAL
var input7=document.createElement("input");
	input7.type="number";
	//input3.placeholder="Ingresa causa de mortandad";
	//input6.class="form-control";
	

	//boton1.id=seccionid+"fila"+f;
	input7.id="evaluaciongeneral";
	
	td = document.createElement("TD");
	td.appendChild(input7);
	tr.appendChild(td);

//END INPUT EVALUACION GENERAL





// EL BOTON ELIMINAR
	var boton1=document.createElement("input");
	boton1.type="button";
	boton1.value="Eliminar";
	//boton1.id=seccionid+"fila"+f;
	boton1.id=numeroDeplantines;
	
	boton1.onclick=function(){eliminaEspecie(this.id);};
	td = document.createElement("TD");
 	td.appendChild(boton1);
	tr.appendChild(td);
	

//END BOTON ELIMINAR

//ADICIONANDO LA FILA
	table.appendChild(tr);


}//end if
else{
	alert("La especie "+textselect+ " ya esta adicionada en la lista");
}
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
    	//alert("comparando"+hijo.id+" y " +texto);
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
{	 var valor=true;
	 var d=document.getElementById("contenedorespecies");
    var hijo=d.firstChild;

    if(hijo.nextSibling!=null){
     hijo=hijo.nextSibling;
    }
    if(hijo.firstChild!=null){
    hijo=hijo.firstChild;	
    }
    
    while(hijo!=null)
    {
    	//alert("comparando"+hijo.id+" y " +texto);
    	if(hijo.id==nombre)
        {
           valor=false;
            break;
        }
        hijo=hijo.nextSibling;

        //alert("Hijo"+hijo.id);
        //hijo=hijo.nextSibling;
    }
   // alert("retornanado valor : "+valor);
	return valor;
}

function calcularNFilas()
{	//retorna el numero de plantines en la tabla
	

	var numero;
	var d=document.getElementById("numeroDeFilas");
	numero = parseInt(d.innerHTML); 
	return numero;
	


	/*var numero=0; 
	var x = document.getElementById("contenedorespecies").lastChild;
		//alert(x.id);
	if (typeof(x.id) == "undefined") //true
	{
		numero=0;
	}
	else{
		numero=parseInt(x.id);
	}
	return numero;
*/

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