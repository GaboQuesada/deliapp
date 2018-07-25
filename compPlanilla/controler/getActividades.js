
function getActividades() {

    $.ajax({
        url: "model/ActividadesgetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#ca").empty();
            $("#ca").append('<option  selected="true"  value="pnull"> Seleccionar... </option> ');
            $.each(datosrespuesta, function (i, item) {


                $("#ca").append('<option   value="' + datosrespuesta[i].car_id + '">' + datosrespuesta[i].car_no + ' </option> ');

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}

function showActividades(pnombre, pitem) {

    $.ajax({
        url: "model/ActividadesgetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#"+pitem).empty();

            $.each(datosrespuesta, function (i, item) {

                if (pnombre === datosrespuesta[i].car_no) {

                    $("#"+pitem).append('<option selected="true"  value="' + datosrespuesta[i].car_id + '">' + datosrespuesta[i].car_no + ' </option> ');
                } else {
                    $("#"+pitem).append('<option   value="' + datosrespuesta[i].car_id + '">' + datosrespuesta[i].car_no + ' </option> ');
                }



            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}

$(document).ready(function () {

    getActividades();
});