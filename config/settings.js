
var servicio;

function getServicio() {
    $.ajax({
        url: "config.json",
        type: "GET",
        async: true,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {

            servicio = response.configType;
            return servicio;

        }
    });
}