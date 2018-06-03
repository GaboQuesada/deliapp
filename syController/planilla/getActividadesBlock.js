
function getActividadesBox() {

    $.ajax({
        url: "../syModel/cargo/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#actividadesBox").empty();

            $.each(datosrespuesta, function (i, item) {

                $("#actividadesBox").append('<div class=" boxcar card " ><div class="card-body"><h5 class="card-title"><strong>' + datosrespuesta[i].car_no + '</strong></h5><p class=" boxcarcontent card-text">' + datosrespuesta[i].car_ca + '.</p> <button  onclick="putInModalActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>&nbsp;<button onclick="deleteActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button></div></div>');





            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}

function showActividadesbox(pnombre) {

    $.ajax({
        url: "../syModel/cargo/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#actividadesBox").empty();

            $.each(datosrespuesta, function (i, item) {

                if (pnombre === datosrespuesta[i].car_no) {

                    $("#actividadesBox").append('<div id="ancla" class=" boxcarnew card " ><div class="card-body"><h5 class="card-title"><strong>' + datosrespuesta[i].car_no + '</strong></h5><p class=" boxcarcontent card-text">' + datosrespuesta[i].car_ca + '.</p> <button  onclick="putInModalActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>&nbsp;<button onclick="deleteActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button> </div></div>');
                } else {
                    $("#actividadesBox").append('<div  class=" boxcar card " ><div class="card-body"><h5 class="card-title"><strong>' + datosrespuesta[i].car_no + '</strong></h5><p class=" boxcarcontent card-text">' + datosrespuesta[i].car_ca + '.</p> <button  onclick="putInModalActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>&nbsp;<button onclick="deleteActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button> </div></div>');
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
        url: "../syModel/cargo/getByLive.php",
        type: 'POST',
        dataType: "json",
        data: {no: $("#actsearch").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#actividadesBox").empty();

            $.each(datosrespuesta, function (i, item) {

                $("#actividadesBox").append('<div class=" boxcar card " ><div class="card-body"><h5 class="card-title"><strong>' + datosrespuesta[i].car_no + '</strong></h5><p class=" boxcarcontent card-text">' + datosrespuesta[i].car_ca + '.</p> <button  onclick="putInModalActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>&nbsp;<button onclick="deleteActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button></div></div>');





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