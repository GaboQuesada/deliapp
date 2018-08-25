function getLiveSearchUsuarios() {

    $.ajax({
        url: "model/cajaUsuarioLike.php",
        type: 'POST',
        dataType: "json",
        data: {userSearch: $("#no").val()},
        beforeSend: function () {

        },
        success: function (respuesta) {



        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });
}

$("#no").keyup(function () {

    getLiveSearchUsuarios();
});