

function getLiveSearch() {

    $.ajax({
        url: "model/PersonagetByLive.php",
        type: 'POST',
        dataType: "json",
        data: {no: $("#actsearch").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {


                        var datosrespuesta = respuesta.resultados;
                                $("#actividadesBox").empty();
                                if ($("#touse").val() === "on") {

                        $.each(datosrespuesta, function (i, item) {
                        $nombre = datosrespuesta[i].pla_no + ' ' + datosrespuesta[i].pla_ap1 + ' ' + datosrespuesta[i].pla_ap2;
                                $ce = datosrespuesta[i].pla_ce;
                                $("#actividadesBox").append('<div class="perinfobox"><div class="row"> <div class="col-lg "> \
            <p class="personalinfo "><strong class="text-primary">Nombre: </strong>' + datosrespuesta[i].pla_no + ' ' + datosrespuesta[i].pla_ap1 + ' ' + datosrespuesta[i].pla_ap2 + '</p> \
            <p class="personalinfo"><strong class="text-primary">Cédula: </strong>' + datosrespuesta[i].pla_ce + '</p> \
            <p class="personalinfo"><strong class="text-primary">Fecha Nacimiento: </strong>' + datosrespuesta[i].pla_fn + '</p> \
        </div> \
        <div class="col-lg align-self-center "> \
            <p class="personalinfo "><strong class="text-primary">Departamento: </strong>' + datosrespuesta[i].dep_no + '</p> \
            <p class="personalinfo"><strong class="text-primary">Cargo: </strong>' + datosrespuesta[i].car_no + '</p> \
        </div> \
        <div class="col-lg align-self-center "> \
            <form method="post" action="../compSistema/model/usuariogetfrompersona.php">\
<input type="hidden" name="nb" value="' + $nombre + '"/> \
<input type="hidden" name="id" value="' + $ce + '"/> \
<input type="submit" class="btn btn-info btn-sm" value="Agregar como usuario"/>\
</form>\
        </div>   \</div></div>');
                        });
                        } else {

                        $.each(datosrespuesta, function (i, item) {

                        $("#actividadesBox").append('<div class="perinfobox"><div class="row"> <div class="col-lg "> \
            <p class="personalinfo "><strong class="text-primary">Nombre: </strong>' + datosrespuesta[i].pla_no + ' ' + datosrespuesta[i].pla_ap1 + ' ' + datosrespuesta[i].pla_ap2 + '</p> \
            <p class="personalinfo"><strong class="text-primary">Cédula: </strong>' + datosrespuesta[i].pla_ce + '</p> \
            <p class="personalinfo"><strong class="text-primary">Fecha Nacimiento: </strong>' + datosrespuesta[i].pla_fn + '</p> \
        </div> \
        <div class="col-lg align-self-center "> \
            <p class="personalinfo "><strong class="text-primary">Departamento: </strong>' + datosrespuesta[i].dep_no + '</p> \
            <p class="personalinfo"><strong class="text-primary">Cargo: </strong>' + datosrespuesta[i].car_no + '</p> \
        </div> \
        <div class="col-lg align-self-center "> \
            <div class="btn-group btn-group-sm" role="group" > \
                <button type="button" class="btn btn-warning btn-sm" onclick="showInModal(' + datosrespuesta[i].pla_ce + ')"  data-toggle="modal" data-target="#UpdatePlanilla"><i class="fas fa-pen-square"></i> Modificar</button> \
                <button type="button" class="btn btn-danger btn-sm" onclick="deletepersona(' + datosrespuesta[i].pla_ce + ')"  ><i class="fas fa-trash-alt"></i> Eliminar</button> \
                   <button type="button" class="btn btn-info btn-sm" onclick="moreinfo(' + datosrespuesta[i].pla_ce + ')" ><i class="fas fa-info-circle"></i> Más info</button> \
            </div>   \
        </div>   \</div></div>');
                        });
                        }
                        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}



$("#actsearch").keyup(function () {

    getLiveSearch();
});
