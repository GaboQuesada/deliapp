

//este escrip muestra las actividades en la pagina actividades
function getActividadesBox() {

    $.ajax({
        url: "model/ActividadesgetAll.php",
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
                                    <h5 class="card-title" ><strong>' + datosrespuesta[i].car_no + '</strong></h5> \n\
                                    <p class=" boxcarcontent card-text">' + datosrespuesta[i].car_ca + '</p> \n\
                                    <button  onclick="putInModalActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>\n\
                                    &nbsp; \n\
                                    <button onclick="deleteActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button> \n\
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
        url: "model/ActividadesgetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#actividadesBox").empty();

            $.each(datosrespuesta, function (i, item) {

                if (pnombre === datosrespuesta[i].car_no) {


                    $("#actividadesBox").append(' <a id="ancla" class="CERBox CERBoxStyleNEW"> \n\
                                <div> \n\
                                    <div class="card-body" > \n\
                                    <h5 class="card-title" ><strong>' + datosrespuesta[i].car_no + '</strong></h5> \n\
                                    <p class=" boxcarcontent card-text">' + datosrespuesta[i].car_ca + '</p> \n\
                                    <button  onclick="putInModalActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>\n\
                                    &nbsp; \n\
                                    <button onclick="deleteActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button> \n\
                                </div></div></a>');
                } else {
                    $("#actividadesBox").append(' <a class="CERBox CERBoxStyle"> \n\
                                <div> \n\
                                    <div class="card-body" > \n\
                                    <h5 class="card-title" ><strong>' + datosrespuesta[i].car_no + '</strong></h5> \n\
                                    <p class=" boxcarcontent card-text">' + datosrespuesta[i].car_ca + '</p> \n\
                                    <button  onclick="putInModalActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>\n\
                                    &nbsp; \n\
                                    <button onclick="deleteActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button> \n\
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
        url: "model/ActividadesgetByLive.php",
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
                                    <h5 class="card-title" ><strong>' + datosrespuesta[i].car_no + '</strong></h5> \n\
                                    <p class=" boxcarcontent card-text">' + datosrespuesta[i].car_ca + '</p> \n\
                                    <button  onclick="putInModalActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#upDateCat"><i class="fas fa-pen-square"></i> Modificar</button>\n\
                                    &nbsp; \n\
                                    <button onclick="deleteActividades(' + datosrespuesta[i].car_id + ')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button> \n\
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


function proof(){
    
    alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Por favor rellene el campo de ' + res.nombre,
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();
}

$(document).ready(function () {
    
    $("#caca").click(function (){
        
       $("#caca").click(); 
    })
    
    

  //  getActividadesBox();

});