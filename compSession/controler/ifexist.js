

function login() {

    var datos = new Array();
    var nb = new objPrm("Nombre", $("#nb").val());
    datos.push(nb);
    var pb = new objPrm("Contraseña", $("#pb").val());
    datos.push(pb);

    var res = new objRes();
    res = validarEsVacido(datos);

    if (res.est === "ko") {
        alertify.error(res.nombre + " " + res.msj);
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Por favor rellene el campo de ' + res.nombre,
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();

    } else {

        $.ajax({
            url: "model/Exist.php",
            type: 'POST',
            dataType: "json",
            data: {us: $("#nb").val(), pa: $("#pb").val()},
            beforeSend: function () {

                $('#div_carga').show();

            },
            success: function (respuesta) {

                var existe = respuesta.resultados;

                if (existe == 0) {
                    alert("cond 0:"+existe);
                    $('#div_carga').hide();
                    alertify.error('Rellene la informacion');

                    alertify.alert()
                            .setting({
                                'label': 'Entendido',
                                'message': 'Contraseña o Usuario incorrectos ',
                                'onok': function () {
                                    alertify.success('Vuelva a intentarlo :)');
                                }
                            }).show();
                } else {
 alert("cond !0:"+existe);
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

    $("#btnEntrar").click(function (event) {
        event.preventDefault();
        login();

    });

});