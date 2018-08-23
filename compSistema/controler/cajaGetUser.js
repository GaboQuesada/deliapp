$(document).ready(function () {

    $("#userSearchre").hide();
    $("#userSearchre").empty();



    $("#userSearch").keyup(function () {
        $("#userSearchre").hide();
        $("#userSearchre").empty();

        if ($("#userSearch").val() === "") {
            $("#userSearchre").hide();
            $("#userSearchre").empty();
        } else {
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
                                                    <button type="button" onclick="settobox(\'' + d[i].usr_id + '\', \'' + nombre + '\')" data-toggle="modal" data-target="#Modalmsg" class="btn btn-primary btn-sm">Selecionar</button>\n\
                                                </div>\n\
                                            </div>\n\
                                        </div>\n\
                                    </li>');
                    });
                },
                error: function () {

                }
            });
        }
    });

});

function settobox(id, nb)
{
    $("#userSearchre").hide();
    $("#userSearchre").empty();
    $("#userSearch").val(nb);
    $("#userSearchh").val(id);

}

$("#userSearch").click(function (){
  $("#userSearch").val("");  
    
});