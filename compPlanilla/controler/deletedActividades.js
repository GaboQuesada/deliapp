

function deleteActividades(pid) {



    alertify.confirm('Desea eliminar la actividad?', 'Sera eliminado permanentemente', function () {

        $.ajax({
            url: "../syModel/planilla/getByCargo.php",
            type: 'POST',
            dataType: "json",
            data: {id: pid},
            beforeSend: function () {

            },
            success: function (respuesta) {

                var tam = respuesta.resultados;


                if (tam == 0) {


                    $.ajax({
                        url: "../syModel/cargo/delete.php",
                        type: 'POST',
                        dataType: "json",
                        data: {id: pid},
                        beforeSend: function () {

                        },
                        success: function (respuesta) {
                            alertify.success("Eliminado correctamente :) ");
                            getActividadesBox();
                            $("#acCancelar").click();
                        },
                        error: function () {

                        }
                    });


                } else {

                    alertify.error("No se puede eliminar.");
                    alertify.alert()
                            .setting({
                                'label': 'Entendido',
                                'message': 'La actividad esta asociada a un trabajador, no puede ser eliminada',
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