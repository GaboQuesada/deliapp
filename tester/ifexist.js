

function login() {

    var datos = new Array();
    var nb = new objPrm("Nombre", $("#nb").val());
    datos.push(nb);
    var pb = new objPrm("Contraseña", $("#pb").val());
    datos.push(pb);

    var res = new objRes();
    res = validarEsVacido(datos);

    if (res.est === "ko") {
        
        alert("vacios");

    } else {

        $.ajax({
            url: "Exist.php",
            type: 'POST',
            dataType: "json",
            data: {us: $("#nb").val(), pa: $("#pb").val()},
            beforeSend: function () {

               

            },
            success: function (respuesta) {

                var existe = respuesta.resultados;

                if (existe == 0) {
                   
                    alert("incorrectos")
                } else {

                    pass($("#nb").val(), $("#pb").val());
                }
            },
            error: function () {
                alert("fallo 1");
            }
        });


    }
}

$(document).ready(function () {

 

    $("#btnconec").click(function () {
   
        login();

    });

});