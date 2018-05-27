

function deleteActividades(pid) {



    alertify.confirm('Desea eliminar la actividad?', 'Confirm Message', function () {


        $.ajax({
           url: "../syModel/cargo/delete.php",
            type: 'POST',
            dataType: "json",
            data: {id: pid},
            beforeSend: function () {

            },
            success: function (respuesta) {
                alertify.success("Eliminado correctamente :) ");
                hacertablaInstructores(0, 10);
                $("#btnToDeleteCancel").click();
            },
            error: function () {

            }
        });

    }
    , function () {
        alertify.error('Cancelado')
    });





}