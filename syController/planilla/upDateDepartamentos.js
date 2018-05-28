

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

        if ($("#tocompare").val() === nombre) {

            $.ajax({
                url: "../syModel/departamentos/upDate.php",
                type: 'POST',
                dataType: "json",
                data: {no: nombre, de: descripcion, id: id},
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
            $.ajax({
                url: "../syModel/departamentos/ifExist.php",
                type: 'POST',
                dataType: "json",
                data: {no: $("#acNb").val()},
                beforeSend: function () {

                },
                success: function (respuesta) {

                    var tam = respuesta.resultados;


                    if (tam == 0) {


                        $.ajax({
                            url: "../syModel/departamentos/upDate.php",
                            type: 'POST',
                            dataType: "json",
                            data: {no: nombre, de: descripcion, id: id},
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
                                    'message': 'Dos departamentos no pueden tener el mismo nombre: ' + nombre,
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

    $("#acGuardar").click(function () {

        upDateActividades();
    });


});



