

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
                
                $msgbtn="Desabilitar";
                
                if(datosrespuesta[i].usr_es === "A"){
                   $msgbtn="Desabilitar"; 
                }else{
                  $msgbtn="habilitar";  
                }
                
                
                $("#listausuarios").append('<div class="card" style="width: 18rem; display: inline-block; margin-right:10px; margin-left: 10px; margin-bottom: 5px;">\n\
                                            <img class="card-img-top" width="100%" height="180" src="../compSesion/userImg/' + datosrespuesta[i].usr_im +  '" alt="Card image cap">\n\
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
\n\                                         <form method="post" action="hdusuarios.php" style="display: inline-block">\n\
                                            <input type="hidden" value="' + datosrespuesta[i].usr_id + '" name="iduss"/>\n\
                                            <input type="hidden" value="'+ $msgbtn +'" name="nbuss"/>\n\
                                            <input type="submit" value="'+ $msgbtn +'" class="btn btn-primary" />\n\
                                            </form>\n\
                                            <input type="button" data-toggle="modal" data-target="#modeleu" value="Editar" onclick="setintobox(\'' + datosrespuesta[i].usr_id + '\')" class="btn btn-primary"></center></div></div>');
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