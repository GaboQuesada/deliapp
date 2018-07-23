
function getActividadesBox() {

    $.ajax({
        url: "model/DepagetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#actividadesBox").empty();

            $.each(datosrespuesta, function (i, item) {

                $("#actividadesBox").append(' <a class="CERBox CERBoxStyle"> \n\
                                <div> \n\
                                    <div class="card-body" > \n\
                                    <h5 class="card-title" ><strong>' + datosrespuesta[i].dep_no + '</strong></h5> \n\
                                    <p class=" boxcarcontent card-text">' + datosrespuesta[i].dep_des + '</p> \n\
                                    <button  onclick="putInModalActividades(' + datosrespuesta[i].dep_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>\n\
                                    &nbsp; \n\
                                    <button onclick="deleteActividades(' + datosrespuesta[i].dep_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button> \n\
                                </div></div></a>');




            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}

function showActividadesbox(pnombre) {

    $.ajax({
        url: "model/DepagetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#actividadesBox").empty();

            $.each(datosrespuesta, function (i, item) {

                if (pnombre === datosrespuesta[i].dep_no) {

                     $("#actividadesBox").append(' <a id="ancla" class="CERBox CERBoxStyleNEW"> \n\
                                <div> \n\
                                    <div class="card-body" > \n\
                                    <h5 class="card-title" ><strong>' + datosrespuesta[i].dep_no + '</strong></h5> \n\
                                    <p class=" boxcarcontent card-text">' + datosrespuesta[i].dep_des + '</p> \n\
                                    <button  onclick="putInModalActividades(' + datosrespuesta[i].dep_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>\n\
                                    &nbsp; \n\
                                    <button onclick="deleteActividades(' + datosrespuesta[i].dep_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button> \n\
                                </div></div></a>');

                } else {
                     $("#actividadesBox").append(' <a class="CERBox CERBoxStyle"> \n\
                                <div> \n\
                                    <div class="card-body" > \n\
                                    <h5 class="card-title" ><strong>' + datosrespuesta[i].dep_no + '</strong></h5> \n\
                                    <p class=" boxcarcontent card-text">' + datosrespuesta[i].dep_des + '</p> \n\
                                    <button  onclick="putInModalActividades(' + datosrespuesta[i].dep_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>\n\
                                    &nbsp; \n\
                                    <button onclick="deleteActividades(' + datosrespuesta[i].dep_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button> \n\
                                </div></div></a>');

                }



            });

            goAncla();
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}

function getLiveSearchActividades() {

    $.ajax({
        url: "model/DepagetByLive.php",
        type: 'POST',
        dataType: "json",
        data: {no: $("#actsearch").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#actividadesBox").empty();

            $.each(datosrespuesta, function (i, item) {

                 $("#actividadesBox").append(' <a class="CERBox CERBoxStyle"> \n\
                                <div> \n\
                                    <div class="card-body" > \n\
                                    <h5 class="card-title" ><strong>' + datosrespuesta[i].dep_no + '</strong></h5> \n\
                                    <p class=" boxcarcontent card-text">' + datosrespuesta[i].dep_des + '</p> \n\
                                    <button  onclick="putInModalActividades(' + datosrespuesta[i].dep_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>\n\
                                    &nbsp; \n\
                                    <button onclick="deleteActividades(' + datosrespuesta[i].dep_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button> \n\
                                </div></div></a>');






            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}

function goAncla() {

    $("#iraAncla")[0].click();

}


$("#actsearch").keyup(function () {

    getLiveSearchActividades();
});

$(document).ready(function () {

    getActividadesBox();
});