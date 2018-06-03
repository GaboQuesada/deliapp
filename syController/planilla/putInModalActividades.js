
function putInModalActividades(id)
{

    $.ajax({
        url: "../syModel/cargo/getByid.php",
        type: 'POST',
        dataType: "json",
        data: {id: id},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;

            $.each(datosrespuesta, function (i, item) {

                $("#acNb").val(datosrespuesta[i].car_no);
                $("#tocompare").val(datosrespuesta[i].car_no);
                $("#acDe").val(datosrespuesta[i].car_ca);
                $("#acId").val(datosrespuesta[i].car_id);

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });



}