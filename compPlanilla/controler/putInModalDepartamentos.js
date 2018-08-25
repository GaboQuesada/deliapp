
function putInModalActividades(id)
{




    $.ajax({
        url: "model/DepagetByid.php",
        type: 'POST',
        dataType: "json",
        data: {id: id},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;

            $.each(datosrespuesta, function (i, item) {

                $("#acNb").val(datosrespuesta[i].dep_no);
                $("#tocompare").val(datosrespuesta[i].dep_no);
                $("#acDe").val(datosrespuesta[i].dep_des);
                $("#acId").val(datosrespuesta[i].dep_id);

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });



}