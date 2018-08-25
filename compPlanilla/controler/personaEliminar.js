

function deletepersona(pid) {



    alertify.confirm('Desea eliminar el Registro?', 'Sera eliminado permanentemente', function () {

        $.ajax({
            url: "model/getByPlanilla.php",
            type: 'POST',
            dataType: "json",
            data: {cod: pid},
            beforeSend: function () {

            },
            success: function (respuesta) {

                var tam = respuesta.resultados;


                if (tam == 0) {


                    $.ajax({
                        url: "model/Personadelete.php",
                        type: 'POST',
                        dataType: "json",
                        data: {ce: pid},
                        beforeSend: function () {
                            $('#div_cargax').show();
                        },
                        success: function (respuesta) {
                            alertify.success("Eliminado correctamente :) ");
                            show(0);
                            $('#div_cargax').hide();

                        },
                        error: function () {

                        }
                    });


                } else {

                    alertify.error("No se puede eliminar.");
                    alertify.alert()
                            .setting({
                                'label': 'Entendido',
                                'message': 'El Registro esta asociada a un Usuario, no puede ser eliminado',
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
    , function () {
        alertify.error('Cancelado')
    });





}