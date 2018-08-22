
function setintobox(pid) {

    $.ajax({
        url: "model/usuarioGetById.php",
        type: 'POST',
        dataType: "json",
        data: {pid: pid},
        beforeSend: function () {

        },
        success: function (respuesta) {


            var d = respuesta.resultados;
            $("#listausuariosmd").empty();
            $.each(d, function (i, item) {

                $("#mimgk").val(d[i].usr_im);
                $("#mrolk").val(d[i].usr_ro);
                $("#midk").val(d[i].usr_id);

                $("#listausuariosmd").append('<div class="card" style="width:100%; margin-bottom: 5px;">\n\
                                            <img class="card-img-top" id="imgshow" width="80%" height="180" src="../compSesion/userImg/' + d[i].usr_im + '" alt="Card image cap">\n\
                                            <div class="card-body">\n\
                                            <h6 class="card-title"><strong>' + d[i].pla_no + '&numsp;\n\
                                            ' + d[i].pla_ap1 + '&numsp;\n\
                                            ' + d[i].pla_ap2 + '</strong></h6><div>\n\
                                            <img style="display: inline-block" src="../compPlanilla/iconos/pla_Departamento.png" width="30" height="30"/>\n\
                                            <p style="display: inline-block">' + d[i].dep_no + '</p></div><div>\n\
                                            <img style="display: inline-block" src="../compPlanilla/iconos/pla_Actividad.png" width="30" height="30"/>\n\
                                            <p style="display: inline-block">' + d[i].car_no + '</p></div><div>\n\
                                            <img style="display: inline-block" src="../compSistema/iconos/sis_Role.png" width="30" height="30"/>\n\
                                            <p style="display: inline-block">' + d[i].rol_no + '</p></div><div>\n\
                                            <img style="display: inline-block" src="../compSistema/iconos/sis_Usuario.png" width="30" height="30"/>\n\
                                            <p style="display: inline-block">' + d[i].usr_us + '</p></div><center>\n\
                                            </div>');



            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });

}




