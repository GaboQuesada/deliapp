

function DH(pid)  {
    alert(pid);
    $.ajax({
        url: "model/usuarioHDC.php",
        type: 'POST',
        dataType: "json",
        data: {ppid: pid},
        beforeSend: function () {

        },
        success: function (respuesta) {
            alert("exito");

        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });



}
