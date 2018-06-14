
function insert() {

    var ced = $("#ce").val();
    var nom = $("#no").val();
    var ape1 = $("#ap1").val();
    var ape2 = $("#ap2").val();
    var fen = $("#fn").val();
    var car = $("#ca").val();
    var dep = $("#de").val();


    var datos = new Array();
    var pce = new objPrm("Cédula", ced);
    datos.push(pce);
    var pnom = new objPrm("Nombre", nom);
    datos.push(pnom);
    var pape1 = new objPrm("Primer Apellido", ape1);
    datos.push(pape1);
    var pape2 = new objPrm("Segundo Apellido", ape2);
    datos.push(pape2);


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

        if (car === "pnull") {
            alertify.error("falta dato actividad");
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'Escoja un tipo de actividad',
                        'onok': function () {
                            alertify.success('Ahora si vamos a trabajar');
                        }
                    }).show();
        } else if (dep === "pnull") {

            alertify.error("falta dato departamento");
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'Escoja un departamento ',
                        'onok': function () {
                            alertify.success('Ahora si vamos a trabajar');
                        }
                    }).show();
        } else if (fen === null || fen === "" || fen === "mm/dd/aaaa" || fen === "00/00/0000" || fen === "0000/00/00" || fen === "00-00-0000" || fen === "0000-00-00") {

            alertify.error("No valido");
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'Fecha no es valida',
                        'onok': function () {
                            alertify.success('Ahora si vamos a trabajar');
                        }
                    }).show();

        } else if (ced === null)
        {
            alertify.error("No valido");
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'El formato debe ser de 9 dijitos y sin guiones o espacios',
                        'onok': function () {
                            alertify.success('9 dijitos');
                        }
                    }).show();
        } else {


            $.ajax({
                url: "../syModel/planilla/ifExist.php",
                type: 'POST',
                dataType: "json",
                data: {ce: ced},
                beforeSend: function () {

                },
                success: function (respuesta) {

                    var tam = respuesta.resultados;


                    if (tam == 0) {


                        $.ajax({
                            url: "../syModel/planilla/insert.php",
                            type: 'POST',
                            dataType: "json",
                            data: {no: nom, ap1: ape1, ap2: ape2, fn: fen, ca: car, de: dep, ce: ced},
                            beforeSend: function () {
                                $('#div_cargax').show();
                            },
                            success: function (respuesta) {

                                $("#ce").val(" ");
                                $("#no").val(" ");
                                $("#ap1").val(" ");
                                $("#ap2").val(" ");
                                $("#fn").val(" ");
                                $("#ca").val(" ");
                                $("#de").val(" ");
                                alertify.success("Registro Agregado a Planilla.");
                                show(0);
                                getActividades();
                                getDepartamentos();
                                $('#div_cargax').hide();
                                $('#aCancelar').click();


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
                                    'message': 'Ya existe un registro ' + ced,
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
}



$(document).ready(function () {

    $("#btnGuardaPla").click(function (e) {
        e.preventDefault();
        insert();
    });


});
