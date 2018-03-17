

function ConstriyeTablaYcuadroPaginacion(pini, pfini) {  // construye la tabla y la paginacion persona

    var cantidad;
    $.ajax({
        url: "http://deliapp.tk/ws/familiacount.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },

        success: function (respuesta) {
          
            var bloques = 0;
            cantidad = respuesta.resultados;
             alert(cantidad);
            var resultado = cantidad / 10;
            if (cantidad <= 10)
            {
                bloques = 1;
            } else if (cantidad > 10 && cantidad < 20) {
                bloques = 2;
            } else {
                bloques = Math.trunc(resultado);
            }
            $("#listapaginacionfamilia").empty();
            $("#cantregfamilia").html('<p>Total registros:' + cantidad + ' </p>');
            var desde = 0;
            var hasta = 10;
            var contador = 0;
            for (var i = 0; i < bloques; i++) {
                contador = contador + 1;
                $("#listapaginacionfamilia").append('<li><a href="#" onclick="hacer(' + desde + ',' + hasta + ')"">' + contador + '</a></li>');
                desde = desde + 10;
            }

        },
        error: function () {

        }
    });


    $.ajax({
        url: "http://deliapp.tk/ws/familiagetAll.php",
        type: 'POST',
        dataType: "json",
        data: {ini: pini, fin: pfini},
        beforeSend: function () {

        },

        success: function (respuesta) {

            var tam;
            var datosrespuesta = respuesta.resultados;
            $("#tablaresultadosfamilia").empty();
            $.each(datosrespuesta, function (i, item) {
                tam = tam + 1;
                $("#tablaresultadosfamilia").append('<tr>\n\
                                                            <td>' + datosrespuesta[i].id+ '</td>\n\
                                                            <td>' + datosrespuesta[i].familiaNombre + '</td>\n\
                                                            <td>' + datosrespuesta[i].idHeredado + '</td>\n\
                                                            <td></td></tr>');

            });

        },
        error: function () {

        }
    });


}

$(document).ready(function () {

   ConstriyeTablaYcuadroPaginacion(0, 10);

});


