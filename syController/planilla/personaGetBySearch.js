

function getLiveSearch() {

    $.ajax({
        url: "../syModel/planilla/getByLive.php",
        type: 'POST',
        dataType: "json",
        data: {no: $("#actsearch").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#actividadesBox").empty();

            $.each(datosrespuesta, function (i, item) {

                $("#actividadesBox").append(' \
                <div class="row boxinfo">\
       <div class="col-lg "> \
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
                <button type="button" class="btn btn-warning btn-sm" onclick="showInModal(' + datosrespuesta[i].pla_ce + ')"  title="Modificar" data-toggle="modal" data-target="#ipdatePlanilla">Modificar</button> \
                <button type="button" class="btn btn-danger btn-sm" onclick="deletepersona(' + datosrespuesta[i].pla_ce + ')"  title="Modificar">Eliminar</button> \
                <button type="button" class="btn btn-dark btn-sm"> Usuario</button> \
            </div>   \
        </div>   \
    </div>');





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
