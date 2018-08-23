$(document).ready(function () {

    $("#newcashbox").submit(function (e) {
        e.preventDefault();

        if ($("#pcdi").val() === "nd" || $("#pcdf").val() === "nd" || $("#pchi").val() === "nd" || $("#pchf").val() === "nd") {


            alertify.error("Faltan datos");
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'Todos los datos son necesarios.',
                        'onok': function () {
                            alertify.success('Ahora si vamos a trabajar');
                        }
                    }).show();


        } else if ($("#pcdf").val() !== "0" && $("#pcdi").val() > $("#pcdf").val()) {

            alertify.error("Faltan datos");
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'El dia de inicio no puede ser anterior al dia de fin.',
                        'onok': function () {
                            alertify.success('Ahora si vamos a trabajar');
                        }
                    }).show();


        } else {


            alertify.confirm('el acceso se dara de alta', 'Recuerde que fuera de este rango la caja no podra ser accedida', function () {

                
                        $.ajax({
                             url: "model/CAJAACCESOinsert.php",
                            type: 'POST',
                            dataType: "json",
                            data: {cjid: $("#cjid").val(), userSearchh:$("#userSearchh").val(),pcdi: $("#pcdi").val(),pcdf: $("#pcdf").val(),pchi: $("#pchi").val(),pchf: $("#pchf").val()},
                            beforeSend: function () {

                            },
                            success: function (respuesta) {
                                alertify.success('Agregado');


                            },
                            error: function () {

                            }
                        });

            }
            , function () {
                alertify.error('Cancel')
            });






        }
    });


});


