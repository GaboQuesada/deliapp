

function upDateActividades() {


    var nombre = $("#acNb").val();
    var descripcion = $("#acDe").val();
    var id = $("#acId").val();



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
            url: "../syModel/cargo/ifExist.php",
            type: 'POST',
            dataType: "json",
            data: {nombre: $("#acNb").val()},
            beforeSend: function () {

            },
            success: function (respuesta) {

                var tam = respuesta.resultados;


                if (tam == 0) {


                    $.ajax({
                        url: "../syModel/cargo/upDate.php",
                        type: 'POST',
                        dataType: "json",
                        data: {no: nombre, ca: descripcion, id: id},
                        beforeSend: function () {
                            $('#div_cargax').show();
                        },
                        success: function (respuesta) {


                            showActividadesbox(nombre);
                            $("#acCancelar").click();
                            $("#acNb").val("");
                            $("#acDe").val("");
                            alertify.success("La actividad a sido modificada.");



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
                                'message': 'Si deceas usar el mismo nombre, solo modifica la descripción, dos actividades no pueden tener el mismo nombre. ' + res.nombre,
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

function upDateActividadesdescrip() {


    var nombre = $("#acNb").val();
    var descripcion = $("#acDe").val();
    var id = $("#acId").val();



    var datos = new Array();

    var pb = new objPrm("Descripción", descripcion);
    datos.push(pb);

    var res = new objRes();
    res = validarEsVacido(datos);

    if (res.est === "ko") {
        alertify.error(res.nombre + " " + res.msj);
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Por favor rellene el campo de ',
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();

    } else {
        $.ajax({
            url: "../syModel/cargo/upDateDescrip.php",
            type: 'POST',
            dataType: "json",
            data: {ca: descripcion, id: id},
            beforeSend: function () {

            },
            success: function (respuesta) {

                showActividadesbox(nombre);
                $("#acCancelar").click();
                $("#acNb").val("");
                $("#acDe").val("");
                alertify.success("La actividad a sido modificada.");



                $('#div_cargax').hide();
            },
            error: function () {

                alert("Ocurrio un error en la llamada Ajax Er:cod 255");
            }
        });
    }
}

$(document).ready(function () {

    $("#acGuardar").click(function () {

        upDateActividades();
    });
    $("#acModificarD").click(function () {

        upDateActividadesdescrip();
    });

});



