$(document).ready(function () {

    $("#userSearchrem").hide();
    $("#userSearchrem").empty();



    $("#userSearchm").keyup(function () {
        $("#userSearchrem").hide();
        $("#userSearchrem").empty();

        if ($("#userSearchm").val() === "") {
            $("#userSearchrem").hide();
            $("#userSearchrem").empty();
        } else {
            $.ajax({
                url: "model/cajaUsuarioLike.php",
                type: 'POST',
                dataType: "json",
                data: {userSearch: $("#userSearchm").val()},
                beforeSend: function () {

                },
                success: function (respuesta) {
                    $("#userSearchrem").show();
                    var tam = 0;
                    var d = respuesta.resultados;
                    $("#userSearchrem").empty();
                    $.each(d, function (i, item) {

                        var nombre = d[i].pla_no + ' ' + d[i].pla_ap1 + ' ' + d[i].pla_ap2;
                        $("#userSearchrem").append('<li class="list-group-item">\n\
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
    $("#userSearchrem").hide();
    $("#userSearchrem").empty();
    $("#userSearchm").val(nb);
    $("#userSearchhm").val(id);

}

$("#userSearchm").click(function (){
  $("#userSearchm").val("");  
    
});