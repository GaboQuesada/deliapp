


function show(pini) {
    var boxsize = parseInt($("#cantbloques").val());
    alert("PASO UNO SHOW");
    var cantidad;
    $.ajax({
        url: "../syModel/planilla/getCount.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {
             alert("PASO 2SHOW");
            var bloques = 0;
            cantidad = respuesta.resultados;
            var resultado = cantidad / boxsize;
            if (cantidad <= boxsize)
            {
                bloques = 1;
            } else if (cantidad > boxsize && cantidad < boxsize * 2) {
                bloques = 2;
            } else {
                bloques = Math.trunc(resultado) + 1;
            }
            $("#bloques").empty();
            $("#total").html('<p>Total registros:' + cantidad + ' </p>');
            var desde = 0;
            var hasta = boxsize;
            var contador = 0;
            for (var i = 0; i < bloques; i++) {
                contador = contador + boxsize;
                $("#bloques").append('<li onclick="show(' + desde + ')" class="page-item"><a class="page-link" href="#">' + contador + '</a></li>');
                desde = desde + boxsize;
            }

        },
        error: function () {

        }
    });
    $.ajax({
        url: "../syModel/planilla/getLimit.php",
        type: 'POST',
        dataType: "json",
        data: {ini: pini, fin: boxsize},
        beforeSend: function () {

        },
        success: function (respuesta) {
 alert("PASO 3 SHOW");
            var tam;
            var datosrespuesta = respuesta.resultados;
            $("#resultados").empty();
            $.each(datosrespuesta, function (i, item) {
                tam = tam + 1;
                $("#resultados").append('<tr><td scope="col">' + datosrespuesta[i].pla_ce + '</td>\n\
<td scope="col">' + datosrespuesta[i].pla_no + ' ' + datosrespuesta[i].pla_ap1 + ' ' + datosrespuesta[i].pla_ap2 + '</td>\n\
<td scope="col">' + datosrespuesta[i].dep_no + '</td>\n\
<td scope="col">' + datosrespuesta[i].car_no + '</td>\n\
<td scope="col">\n\
<div class="dropdown">\n\
  <button class="btn btn-dark dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n\
  </button>\n\
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">\n\
    <a class="dropdown-item" href="#" onclick="showInModal(' + datosrespuesta[i].pla_ce + ')" title="Modificar" data-toggle="modal" data-target="#ipdatePlanilla"><i class="fas fa-edit"></i> Modificar</a>\n\
    <a class="dropdown-item" href="#" onclick="deletepersona(' + datosrespuesta[i].pla_ce + ')" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i>Eliminar </a>\n\
    <a class="dropdown-item" href="#" onclick="setUsuario(' + datosrespuesta[i].pla_ce + ')" data-toggle="tooltip" data-placement="top" title="Asignar Usuario"><i class="fas fa-user-plus"> Asignar Usuario</i></a>\n\
  </div>\n\
</div>\n\
</td></tr>');
            });
        },
        error: function () {

        }
    });
}

function getLiveSearch() {

    $.ajax({
        url: "../syModel/planilla/getByLive.php",
        type: 'POST',
        dataType: "json",
        data: {no: $("#actsearch").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {


          
            var tam;
            var datosrespuesta = respuesta.resultados;
            $("#resultados").empty();
            $.each(datosrespuesta, function (i, item) {
                tam = tam + 1;
                $("#resultados").append('<tr><td scope="col">' + datosrespuesta[i].pla_ce + '</td>\n\
<td scope="col">' + datosrespuesta[i].pla_no + ' ' + datosrespuesta[i].pla_ap1 + ' ' + datosrespuesta[i].pla_ap2 + '</td>\n\
<td scope="col">' + datosrespuesta[i].dep_no + '</td>\n\
<td scope="col">' + datosrespuesta[i].car_no + '</td>\n\
<td scope="col">\n\
<div class="dropdown">\n\
  <button class="btn btn-dark dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n\
  </button>\n\
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">\n\
    <a class="dropdown-item" href="#" onclick="showInModal(' + datosrespuesta[i].pla_ce + ')" title="Modificar" data-toggle="modal" data-target="#ipdatePlanilla"><i class="fas fa-edit"></i> Modificar</a>\n\
    <a class="dropdown-item" href="#" onclick="deletepersona(' + datosrespuesta[i].pla_ce + ')" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i>Eliminar </a>\n\
    <a class="dropdown-item" href="#" onclick="setUsuario(' + datosrespuesta[i].pla_ce + ')" data-toggle="tooltip" data-placement="top" title="Asignar Usuario"><i class="fas fa-user-plus"> Asignar Usuario</i></a>\n\
  </div>\n\
</div>\n\
</td></tr>');
            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}


$("#actsearch").keyup(function () {

    getLiveSearch();
});

$(document).ready(function () {
    show(0);

    $("#cantbloques").change(function () {

        show(0);

    });

});