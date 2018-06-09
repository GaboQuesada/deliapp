function  show(pini) {
    var boxsize = parseInt($("#cantbloques").val());
    var resuorder = $("#order").val();

    var cantidad;
    $.ajax({
        url: "../syModel/planilla/getCount.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {

            var bloques = 0;
            cantidad = respuesta.resultados;
            var resultado = cantidad / boxsize;
            if (cantidad <= boxsize)
            {
                bloques = 1;
            } else if (cantidad > boxsize && cantidad < boxsize * 2) {
                bloques = 2;
            } else {
                bloques = Math.trunc(resultado) + 1;
            }
            $("#bloques").empty();
            $("#total").html('<p>Total registros:' + cantidad + ' </p>');
            var desde = 0;
            var hasta = boxsize;
            var contador = 0;
            for (var i = 0; i < bloques; i++) {
                contador = contador + boxsize;
                $("#bloques").append('<li onclick="show(' + desde + ')" class="page-item"><a class="page-link" href="#">' + contador + '</a></li>');
                desde = desde + boxsize;
            }

// aqui

 $.ajax({
        url: "../syModel/planilla/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#actividadesBox").empty();

            $.each(datosrespuesta, function (i, item) {

                $("#actividadesBox").append(' \
                <div class="row boxinfo">\
       <div class="col-lg "> \
            <p class="personalinfo "><strong class="text-primary">Nombre: </strong>' + datosrespuesta[i].pla_no + ' ' + datosrespuesta[i].pla_ap1 + ' ' + datosrespuesta[i].pla_ap2 + '</p> \
            <p class="personalinfo"><strong class="text-primary">Cédula: </strong>' + datosrespuesta[i].pla_ce + '</p> \
            <p class="personalinfo"><strong class="text-primary">Fecha Nacimiento: </strong>' + datosrespuesta[i].pla_fn + '</p> \
        </div> \
        <div class="col-lg align-self-center "> \
            <p class="personalinfo "><strong class="text-primary">Departamento: </strong>' + datosrespuesta[i].dep_no + '</p> \
            <p class="personalinfo"><strong class="text-primary">Cargo: </strong>' + datosrespuesta[i].car_no + '</p> \
        </div> \
        <div class="col-lg align-self-center "> \
            <div class="btn-group btn-group-sm" role="group" > \
                <button type="button" class="btn btn-warning btn-sm">Modificar</button> \
                <button type="button" class="btn btn-danger btn-sm">Eliminar</button> \
                <button type="button" class="btn btn-dark btn-sm"> Usuario</button> \
            </div>   \
        </div>   \
    </div>');





            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });


        },
        error: function () {

        }
    });
}

$("#cantbloques").change(function () {

    show(0);

});

$(document).ready(function () {

    show(0);
});