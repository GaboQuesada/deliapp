

function getbyperson(nb, ce) {

   

    $.ajax({
        url: "../compSistema/model/usuariogetfrompersona.php",
        type: 'POST',
        dataType: "json",
        data: {id: ce, nb: nb},
        beforeSend: function () {

        },
        success: function (respuesta) {
            location.href = "../compSistema/usuarios.php";


        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255 xt");
        }
    });


}