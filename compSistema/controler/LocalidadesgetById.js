

function getbyid(pid) {
    $.ajax({
        url: "model/LocalidadesGetById.php",
        type: 'POST',
        dataType: "json",
        data: {pid:pid},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var d= respuesta.resultados;
           
            $.each(d, function (i, item) {

               //d[i].comp

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });

}


