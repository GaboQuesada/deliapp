$(document).ready(function () {



    $("#newcashbox").submit(function (e) {
        e.preventDefault();

        if ($("#pnb").val() === "" ) {


            alertify.error("Faltan datos");
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'El nombre es obligatorio.',
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



