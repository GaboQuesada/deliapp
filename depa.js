function getDepartamentos() {

    $.ajax({
        url: "getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {
            alert("bien bien")

            var datosrespuesta = respuesta.resultados;
            $("#resultados").empty();
      
            $.each(datosrespuesta, function (i, item) {


                $("#resultados").append('<tr><td>' + datosrespuesta[i].dep_id + '</td><td>' + datosrespuesta[i].dep_no + '</td></tr> ');

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}

$(document).ready(function (){
    
    alert("hello world");
    
    getDepartamentos();
});