$(document).ready(function () {



    $("#newcashbox").submit(function (e) {
        e.preventDefault();

        if ($("#pnb").val() === "" || $("#loid").val() === "0") {


            alertify.error("Faltan datos");
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'El nombre y la localidad son obligatorios.',
                        'onok': function () {
                            alertify.success('Ahora si vamos a trabajar');
                        }
                    }).show();


        } else {


            $.ajax({
                url: "model/cajaIfExist.php",
                type: 'POST',
                dataType: "json",
                data: {pnb: $("#pnb").val(), loid: $("#loid").val()},
                beforeSend: function () {

                },
                success: function (respuesta) {

                    var tam = respuesta.resultados;

                  

                    if (tam == 0) {
                        alertify.alert()
                                .setting({
                                    'label': 'Entendido',
                                    'message': '¿Está seguro de la información es veras y suficiente ?, una vez agregada no puede ser modificada.',
                                    'onok': function () {
                                        var objform = $("#newcashbox");
                                        var datos = new FormData(document.getElementById("newcashbox"));


                                        $.ajax({
                                            url: "model/cajainsert.php",
                                            type: "POST",
                                            data: datos,
                                            dataType: "json",
                                            processData: false,
                                            contentType: false,
                                            beforeSend: function () {

                                            },
                                            success: function (respuesta) {
                                                alertify.success('Agregado');
                                                $("#pnb").val("");
                                                $("#loid").val('0');
                                               getAllCajas();

                                            },
                                            error: function () {

                                            }
                                        });

                                    }
                                }).show();


                    } else {

                        alertify.error("Mismo nombre");
                        alertify.alert()
                                .setting({
                                    'label': 'Entendido',
                                    'message': 'Dos o más cajas vinculadas a una misma localidada, No pueden tener el mismo nombre.',
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
    });


});



