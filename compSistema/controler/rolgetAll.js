
function getRoles() {

    $.ajax({
        url: "model/ROLgetAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#showroles").empty();

            $.each(datosrespuesta, function (i, item) {



                $("#showroles").append('\
<li class="list-group-item miitem" onclick="setRoleInfo( \' '  + datosrespuesta[i].rol_no +  ' \' , \' '  + datosrespuesta[i].rol_de +  ' \', \' '  + datosrespuesta[i].rol_id +  ' \')">\
 <div class="col-lg-10" style="display: inline-block; ">' + datosrespuesta[i].rol_no + '</div>\
 <div class="col-lg-1" style="display: inline-block"><i class="far fa-arrow-alt-circle-right"></i></div></li>');

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255 - rga");
        }
    });
}

$(document).ready(function () {

    getRoles();



});