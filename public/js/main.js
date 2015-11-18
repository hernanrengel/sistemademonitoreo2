$(function() {
    var proyecto= {};
    $('#departamento').change(function() {
        $('#provincia').html(''); //borramos las provincias escogidas
        $('#municipio').html(''); //borramos las provincias escogidas
        $('#comunidad').html(''); //borramos las comunidades escogidas

        //funcion para adicionar las provincias del departamento seleccionado
        function listarProvincias(provincias){
            provincias.forEach(function(provincia, index) {
                $('#provincia').append($('<option>', {
                    value: provincia['id_provincia'],
                    text: provincia['nombre_provincia']
                }));
            })
        }

        var departamento= {id_departamento: $('#departamento').val()};
        $.ajax({
            contentType: "application/json",
            data: departamento,
            dataType: 'json',
            success: function (r) {
                listarProvincias(r);
            },
            error: function() {
                alert('No se puede obtener las provincias!');
            },
            type: "GET",
            url: "registro_plantacion/provincias"
        });
    })

    $('#provincia').change(function() {
        $('#municipio').html(''); //borramos los municipios escogidos
        $('#comunidad').html(''); //borramos las comunidades escogidas

        //funcion para adicionar las provincias del departamento seleccionado
        function listarMunicipios(municipios){
            municipios.forEach(function(municipio, index) {
                $('#municipio').append($('<option>', {
                    value: municipio['id_municipio'],
                    text: municipio['nombre_municipio']
                }));
            })
        }

        var provincia= {id_provincia: $('#provincia').val()};
        $.ajax({
            contentType: "application/json",
            data: provincia,
            dataType: 'json',
            success: function (r) {
                listarMunicipios(r);
            },
            error: function() {
                alert('No se puede obtener los municipios!');
            },
            type: "GET",
            url: "registro_plantacion/municipios"
        });
    })

    $('#municipio').change(function() {
        $('#comunidad').html(''); //borramos las comunidades escogidas

        //funcion para adicionar las provincias del departamento seleccionado
        function listarComunidades(comunidades){
            comunidades.forEach(function(comunidad, index) {
                $('#comunidad').append($('<option>', {
                    value: comunidad['id_comunidad'],
                    text: comunidad['nombre_comunidad']
                }));
            })
        }

        var municipio= {id_municipio: $('#municipio').val()};
        $.ajax({
            contentType: "application/json",
            data: municipio,
            dataType: 'json',
            success: function (r) {
                listarComunidades(r);
            },
            error: function() {
                alert('No se puede obtener las comunidades!');
            },
            type: "GET",
            url: "registro_plantacion/comunidades"
        });
    })

    $('#enviar').click(function() {
        var comunidades= [];
        $( "select#comunidad option:selected" ).each(function() {
            comunidades.push($( this ).val());
        });

        var participantes= [];
        
        //iteramos sobre cada uno de las filas de la tabla de participantes pero no por la seccion de titulos porque esta no corresponde a pariticipantes
        $('#participantes tr+tr').each(function () { 
            var id_tipo_participante = $(this).find("td").eq(0).html();
            var total = $(this).find("td").eq(1).html();
            var total_hombre = $(this).find("td").eq(2).html();
            var total_mujer = $(this).find("td").eq(3).html();

            participantes.push({
                id_tipo_participante: id_tipo_participante,
                total: total,
                total_hombre: total_hombre,
                total_mujer: total_mujer
            });
        });

        var plantacion={
            superficie_plantada: $('#proyecto_superficie_plantada').val(),
            fecha_inicio_plantacion: $('#proyecto_fecha_inicio_plantacion').val(),
            fecha_fin_plantacion: $('#proyecto_fecha_fin_plantacion').val(),
            comunidades: comunidades,
            participantes: participantes
        }

        // console.log(plantacion);

        $.ajax({ 
            contentType: "application/json",
            data: JSON.stringify(plantacion),
            dataType: 'json',
            success: function (r) {
                // alert('Se adiciono correctamente el registro!');
                console.log(r);

            },
            error: function() {
                alert('No se pudo guardar el registro!');
            },
            type: "POST",
            url: "registro_plantacion"
        });
    });

    $('#adicionar_participante').click(function() {
        // proyecto.participantes= []
    })
})
