

function getDepartamentos() {

    $.ajax({
        url: "../syModel/departamentos/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#de").empty();
            $("#de").append('<option  selected="true"  value=""> Selecionar... </option> ');
            $.each(datosrespuesta, function (i, item) {


                $("#de").append('<option   value="' + datosrespuesta[i].id + '">' + datosrespuesta[i].nombre + ' </option> ');

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}


function showDepartamentos(pnombre) {

    $.ajax({
        url: "../syModel/departamentos/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#de").empty();

            $.each(datosrespuesta, function (i, item) {

                if (pnombre === datosrespuesta[i].nombre) {

                    $("#de").append('<option selected="true"  value="' + datosrespuesta[i].id + '">' + datosrespuesta[i].nombre + ' </option> ');
                } else {
                    $("#de").append('<option   value="' + datosrespuesta[i].id + '">' + datosrespuesta[i].nombre + ' </option> ');
                }



            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}

$(document).ready(function () {

    getDepartamentos();
});