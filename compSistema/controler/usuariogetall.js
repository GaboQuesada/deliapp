

function getAllUser() {

    $.ajax({
        url: "model/usuarioAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {

            var datosrespuesta = respuesta.resultados;
            $("#listausuarios").empty();
            $.each(datosrespuesta, function (i, item) {
                $("#listausuarios").append('<div class="card" style="width: 18rem; display: inline-block">\n\
                                            <img class="card-img-top" src="../compSesion/userImg/adri.jpg" alt="Card image cap">\n\
                                            <div class="card-body">\n\
                                            <h6 class="card-title"><strong>' + datosrespuesta[i].pla_no +  '&numsp;\n\
                                            ' + datosrespuesta[i].pla_ap1 + '&numsp;\n\
                                            ' + datosrespuesta[i].pla_ap2 + '</strong></h6><div>\n\
                                            <img style="display: inline-block" src="../compPlanilla/iconos/pla_Departamento.png" width="30" height="30"/>\n\
                                            <p style="display: inline-block">' + datosrespuesta[i].dep_no + '</p></div><div>\n\
                                            <img style="display: inline-block" src="../compPlanilla/iconos/pla_Actividad.png" width="30" height="30"/>\n\
                                            <p style="display: inline-block">' + datosrespuesta[i].car_no + '</p></div><div>\n\
                                            <img style="display: inline-block" src="../compSistema/iconos/sis_Role.png" width="30" height="30"/>\n\
                                            <p style="display: inline-block">' + datosrespuesta[i].rol_no + '</p></div><div>\n\
                                            <img style="display: inline-block" src="../compSistema/iconos/sis_Usuario.png" width="30" height="30"/>\n\
                                            <p style="display: inline-block">' + datosrespuesta[i].usr_us + '</p></div><center>\n\
                                            <input type="button" value="Desabilitar" onclick="" class="btn btn-primary">\n\
                                            <input type="button" value="Editar" onclick="" class="btn btn-primary"></center></div></div>');
            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });

}

$(document).ready(function (){
    
    getAllUser();
    
});