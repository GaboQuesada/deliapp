



function logIn() {

    var pus = $("#txtUs").val();
    var pps = $("#txtPs").val();

    if (isEmptyText(pus) && isEmptyText(pps)) {
        alert("Rellene la informacion")
    } else if (isEmptyText(pus)) {
        alert(" usuario esta vacido");
    } else if (isEmptyText(pps)) {
        alert("contraseña no indicada")
    }


    $.ajax({
        url: "appCore/model/user/usuarioPassCheckCount.php",
        type: 'POST',
        dataType: "json",
        data: {us: pus, ps: pps},
        beforeSend: function () {

        },
        success: function (respuesta) {

            var tam;
            var datosrespuesta = respuesta.resultados;
            $("#tablaresultados").empty();
            $.each(datosrespuesta, function (i, item) {
                tam = tam + 1;
                $("#tablaresultados").append("<tr data-toggle='modal' data-target='#instructorModalConfirmInsert'   id='" + datosrespuesta[i].PER_CODIGO + "' onclick='test(" + datosrespuesta[i].PER_CODIGO + ")'><td>" + datosrespuesta[i].PER_CODIGO + "</td><td>" + datosrespuesta[i].PER_NOMBRE + "</td><td>" + datosrespuesta[i].PER_P_APELLIDO + "</td><td>" + datosrespuesta[i].PER_S_APELLIDO + "</td></tr>");
            });
        },
        error: function () {

        }
    });


}
;



$(document).ready(function () {

    $("#btnIngresar").click(function () {
        logIn();
    });

});
