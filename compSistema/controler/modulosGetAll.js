
function getSecciones() {

    $.ajax({
        url: "../syModel/modulo/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#getbox").empty();
            
            $.each(datosrespuesta, function (i, item) {


if(datosrespuesta[i].ses_et === 'ct'){
      $("#getbox").append('<div class="card">\n\
<div class="card-body">\n\
<div class="col-lg-2 align-self-center" style="display: inline-block"> \
                <a href="sistema.php"  ><i class="material-icons it itdesing" style=" font-size:100px;width: 135px;height: 135px;"> '+datosrespuesta[i].ses_im+' </i></a></div> <div class="col-lg-7" style="display: inline-block"> \
                   <h4 class="card-title">' + datosrespuesta[i].ses_no + '</h4> \
                <p class="card-text">Descripción: ' + datosrespuesta[i].ses_de + '</p> \
               <a href="#" data-toggle="modal" data-target="#exampleModalLong" class="card-link font-weight-bold" style="text-decoration: underline ; ">Ver Sub Modulos</a> \
                <a  class="card-link">Estado: <span class="text-success"><strong>Contratado</strong></span></a> \
            </div> \
            <div class="col-lg-2 align-self-center" style="display: inline-block"></div></div></div>');
    
}else{
    
    $("#getbox").append('<div class="card">\n\
<div class="card-body">\n\
<div class="col-lg-2 align-self-center" style="display: inline-block"> \
                <a href="sistema.php"  ><i class="material-icons it itdesing" style=" font-size:100px;width: 135px;height: 135px;"> '+datosrespuesta[i].ses_im+' </i></a></div> <div class="col-lg-7" style="display: inline-block"> \
                   <h4 class="card-title">' + datosrespuesta[i].ses_no + '</h4> \
                <p class="card-text">Descripción: ' + datosrespuesta[i].ses_de + '</p> \
               <a href="#" data-toggle="modal" data-target="#exampleModalLong" class="card-link font-weight-bold" style="text-decoration: underline ; ">Ver Sub Modulos</a> \
                <a  class="card-link">Estado: <span class="text-warning"><strong> No contratado</strong></span></a> \
            </div> \
            <div class="col-lg-2 align-self-center" style="display: inline-block">\n\
<button type="button" class="btn btn-dark btn-sm">Contratar Modulo</button>\
</div></div></div>');
}

              

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}


$(document).ready(function () {

    getSecciones();
});