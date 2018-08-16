

$(document).ready(function () {



    $("#fileinfo").submit(function (e) {
        e.preventDefault();

        if ($("#pnb").val() === "" || $("#ptl").val() === '0') {


            alertify.error("Faltan datos");
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'El nombre y la Localidad son obligatorios.',
                        'onok': function () {
                            alertify.success('Ahora si vamos a trabajar');
                        }
                    }).show();


        } else {
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': '¿Está seguro de la información es veras y suficiente ?, una vez agregada no puede ser modificada.',
                        'onok': function () {
                            var objform = $("#fileinfo");
                            var datos = new FormData(document.getElementById("fileinfo"));
                            datos.append("action", "insert");

                            $.ajax({
                                url: "model/LocalidadesInsert.php",
                                type: "POST",
                                data: datos,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function () {

                                },
                                success: function (respuesta) {
                                    alertify.success('Agregado');
                                    location.reload();

                                },
                                error: function () {

                                }
                            });

                        }
                    }).show();


        }
    });


});



