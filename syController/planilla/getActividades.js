
function getActividades() {

    $.ajax({
        url: "../syModel/cargo/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#ca").empty();
            $("#ca").append('<option  selected="true"  value=""> Selecionar... </option> ');
            $.each(datosrespuesta, function (i, item) {


                $("#ca").append('<option   value="' + datosrespuesta[i].id + '">' + datosrespuesta[i].no + ' </option> ');

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}

function showActividades(pnombre) {

    $.ajax({
        url: "../syModel/cargo/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#ca").empty();

            $.each(datosrespuesta, function (i, item) {

                if (pnombre === datosrespuesta[i].no) {

                    $("#ca").append('<option selected="true"  value="' + datosrespuesta[i].id + '">' + datosrespuesta[i].no + ' </option> ');
                } else {
                    $("#ca").append('<option   value="' + datosrespuesta[i].id + '">' + datosrespuesta[i].no + ' </option> ');
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