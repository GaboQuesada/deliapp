

function insertActividades() {
   
    var nombre = $("#aNb").val();
    var descripcion = $("#aDe").val();


    var datos = new Array();
    var nb = new objPrm("Nombre", nombre);
    datos.push(nb);
    var pb = new objPrm("Descripción", descripcion);
    datos.push(pb);

    var res = new objRes();
    res = validarEsVacido(datos);

    if (res.est === "ko") {
        alertify.error(res.nombre + " " + res.msj);
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Por favor rellene el campo de ' + res.nombre,
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();

    } else {

        $.ajax({
            url: "model/ActividadesifExist.php",
            type: 'POST',
            dataType: "json",
            data: {nombre: $("#aNb").val()},
            beforeSend: function () {

            },
            success: function (respuesta) {

                var tam = respuesta.resultados;


                if (tam == 0) {


                    $.ajax({
                        url: "model/Actividadesinsert.php",
                        type: 'POST',
                        dataType: "json",
                        data: {no: nombre, ca: descripcion},
                        beforeSend: function () {
                            $('#div_cargax').show();
                        },
                        success: function (respuesta) {
                            
                          
                            showActividadesbox(nombre);
                            $("#aCancelar").click();
                            $("#aNb").val("");
                            $("#aDe").val("");
                            alertify.error("La actividad a sido agregada.");
                            
                            
                             
                             $('#div_cargax').hide();
                        


                        },
                        error: function () {

                            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
                        }
                    });


                } else {

                    alertify.error(res.nombre + " " + res.msj);
                    alertify.alert()
                            .setting({
                                'label': 'Entendido',
                                'message': 'Ya existe un registro ' + res.nombre,
                                'onok': function () {
                                    alertify.success('Ahora si vamos a trabajar');
                                }
                            }).show();

                }


            },
            error: function () {

                alert("Ocurrio un error en la llamada Ajax Er:cod 255");
            }
        });
    }
}



$(document).ready(function () {

    $("#aGuardar").click(function () {

        insertActividades();
    });


});


