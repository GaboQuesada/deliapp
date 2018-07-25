
function insertDepartamentos() {

    var nombre = $("#dNb").val();
    var descripcion = $("#dDe").val();


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
            url: "../syModel/departamentos/ifExist.php",
            type: 'POST',
            dataType: "json",
            data: {no: nombre},
            beforeSend: function () {

            },
            success: function (respuesta) {

                var tam = respuesta.resultados;


                if (tam == 0) {


                    $.ajax({
                        url: "../syModel/departamentos/insert.php",
                        type: 'POST',
                        dataType: "json",
                        data: {no: nombre, de: descripcion},
                        beforeSend: function () {

                        },
                        success: function (respuesta) {

                            showDepartamentos(nombre,"de");
                            $("#dCancelar").click();
                            $("#dNb").val("");
                            $("#dDe").val("");
                            alertify.success("El departamento a sido agregado.");


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

    $("#dGuardar").click(function () {

        insertDepartamentos();
    });


});


