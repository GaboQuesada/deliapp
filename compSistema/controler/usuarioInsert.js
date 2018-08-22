function readURLModificaU(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#pimuv')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(180);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function () {

    $("#newcashbox").submit(function (e) {
        e.preventDefault();


        if ($("#idup").val() === "0") // si no existe el colaborador
        {
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'Escoger desde Planilla',
                        'onok': function () {
                            alertify.success('Ahora si vamos a trabajar');
                        }
                    }).show();
        } else { // si existe el colaborador

            $.ajax({
                url: "model/usuarioExist.php",
                type: 'POST',
                dataType: "json",
                data: {id: $("#idup").val()},
                beforeSend: function () {

                },
                success: function (respuesta) {

                    var tam = respuesta.resultados;


                    if (tam == 0)
                    { // si no existe el usuario


                        if ($("#rolid").val() === "0") { // si no se ha escogido el rol

                            alertify.error("Se necesita un Role.");
                            alertify.alert()
                                    .setting({
                                        'label': 'Entendido',
                                        'message': 'Seleccione un Role',
                                        'onok': function () {
                                            alertify.success('Ahora si vamos a trabajar');
                                        }
                                    }).show();

                        } else {

                            // comienza   xxxxxx
                            $.ajax({
                                url: "model/usuariousuarioexist.php",
                                type: 'POST',
                                dataType: "json",
                                data: {us: $("#pnus").val()},
                                beforeSend: function () {

                                },
                                success: function (respuesta) {

                                    var tam = respuesta.resultados;

                                    if ($("#pnus").val() === "" || $("#pnupa").val() === "") {

                                        alertify.error("Datos necesarios.");
                                        alertify.alert()
                                                .setting({
                                                    'label': 'Entendido',
                                                    'message': 'Se necesita usuario y contraseña',
                                                    'onok': function () {
                                                        alertify.success('Ahora si vamos a trabajar');
                                                    }
                                                }).show();
                                    } else {



                                        if (tam == 0)
                                        {

                                            var objform = $("#newcashbox");
                                            var datos = new FormData(document.getElementById("newcashbox"));


                                            $.ajax({
                                                url: "model/usuarioInsert.php",
                                                type: "POST",
                                                data: datos,
                                                dataType: "json",
                                                processData: false,
                                                contentType: false,
                                                beforeSend: function () {

                                                },
                                                success: function (data) {

                                                    $("#rolid").val('0');
                                                    $("#nombtok").val("Escoger desde Planilla");
                                                    $("#idup").val("0");
                                                    getAllUser();



                                                },
                                                error: function () {

                                                    alert("Error del servidor ert");
                                                }
                                            });

                                        } else { // si el usuario existe 

                                            alertify.error("Ya existe.");
                                            alertify.alert()
                                                    .setting({
                                                        'label': 'Entendido',
                                                        'message': 'El nombre de usuario ya existe',
                                                        'onok': function () {
                                                            alertify.success('Ahora si vamos a trabajar');
                                                        }
                                                    }).show();

                                        }

                                    }
                                },
                                error: function () {

                                    alert("Ocurrio un error en la llamada Ajax Er:cod 255");
                                }
                            });


                            //  xxxxxxxxxxxxxxxxx
                        }

                    } else { // si el usuario existe 

                        alertify.error("Ya existe.");
                        alertify.alert()
                                .setting({
                                    'label': 'Entendido',
                                    'message': 'El colaborador ya tiene un usuario',
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

        } // fin del colaborador 

    });


});



