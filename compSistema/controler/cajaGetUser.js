(document).ready(function () {

    $("#userSearchre").hide();



    $("#userSearch").keyup(function () {

        alert("hola");
            $.ajax({
                url: "model/cajaUsuarioLike.php",
                type: 'POST',
                dataType: "json",
                data: {userSearch: $("#userSearch").val()},
                beforeSend: function () {

                },
                success: function (respuesta) {
                    $("#userSearchre").show();
                    var tam = 0;
                    var d = respuesta.resultados;
                    $("#userSearchre").empty();
                    $.each(d, function (i, item) {

                        var nombre = d[i].pla_no + ' ' + d[i].pla_ap1 + ' ' + d[i].pla_ap2;
                        $("#userSearchre").append('<li class="list-group-item">\n\
                                        <div>\n\
                                            <div class="row">\n\
                                                <div class="col-sm-8">\n\
                                                    <img src="../compSesion/userImg/' + d[i].usr_im + '"width="30" height="30" >&numsp;\n\
                                                    ' + d[i].pla_no + ' ' + d[i].pla_ap1 + ' ' + d[i].pla_ap2 + '\n\
                                                </div>\n\
                                                <div class="col-sm-3">\n\
                                                    <button type="button" onclick="setinfo(\'' + d[i].us_im + '\',  \'' + nombre + '\', \'' + d[i].us_id + '\')" data-toggle="modal" data-target="#Modalmsg" class="btn btn-primary btn-sm">Enviar Mensaje</button>\n\
                                                </div>\n\
                                            </div>\n\
                                        </div>\n\
                                    </li>');
                    });
                },
                error: function () {

                }
            });
        
    });

});