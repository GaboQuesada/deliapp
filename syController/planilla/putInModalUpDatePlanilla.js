function showInModal(pid) {

    $.ajax({
        url: "../syModel/planilla/getByid.php",
        type: 'POST',
        dataType: "json",
        data: {ce: pid},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;

            $.each(datosrespuesta, function (i, item) {

                $("#ceu").val(datosrespuesta[i].pla_ce);
                $("#ceu").prop("disabled", true);
                $("#nou").val(datosrespuesta[i].pla_no);
                $("#ap1u").val(datosrespuesta[i].pla_ap1);
                $("#ap2u").val(datosrespuesta[i].pla_ap2);
                $("#fnu").val(datosrespuesta[i].pla_fn);
                showActividades(datosrespuesta[i].car_no , "cau");
                showDepartamentos(datosrespuesta[i].dep_no , "deu");

               

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });



}