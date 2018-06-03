

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
            $("#de").append('<option  selected="true"  value="pnull"> Seleccionar... </option> ');
            $.each(datosrespuesta, function (i, item) {


                $("#de").append('<option   value="' + datosrespuesta[i].dep_id + '">' + datosrespuesta[i].dep_no + ' </option> ');

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}


function showDepartamentos(pnombre, pitem) {

    $.ajax({
        url: "../syModel/departamentos/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#"+pitem).empty();

            $.each(datosrespuesta, function (i, item) {

                if (pnombre === datosrespuesta[i].dep_no) {

                    $("#"+pitem).append('<option selected="true"  value="' + datosrespuesta[i].dep_id + '">' + datosrespuesta[i].dep_no + ' </option> ');
                } else {
                    $("#"+pitem).append('<option   value="' + datosrespuesta[i].dep_id + '">' + datosrespuesta[i].dep_no + ' </option> ');
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