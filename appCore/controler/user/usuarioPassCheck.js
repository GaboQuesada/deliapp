



function logIn() {

    var pus = $("#txtUs").val();
    var pps = $("#txtPs").val();

    if (isEmptyText(pus) && isEmptyText(pps)) {
        alertify.error('Rellene la informacion');



        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Se requiere que llene los campos ',
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();
    } else if (isEmptyText(pus)) {
        alertify.error(" usuario esta vacido");
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Por favor rellene el campo de usuario ',
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();
    } else if (isEmptyText(pps)) {
        alertify.error("contraseña no indicada");
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Por favor rellene el campo de contraseña ',
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();
    } else {


        $.ajax({
            url: "appCore/model/user/usuarioPassCheckCount.php",
            type: 'POST',
            dataType: "json",
            data: {us: pus, ps: pps},
            beforeSend: function () {

                $('#div_carga').show();

            },
            success: function (respuesta) {
                $('#div_carga').hide();
                var existe = respuesta.resultados;

                if (existe == 0) {
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
                    $.ajax({
                        url: "appCore/model/user/usuarioPassCheck.php",
                        type: 'POST',
                        dataType: "json",
                        data: {us: pus, ps: pps},
                        beforeSend: function () {

                        },
                        success: function (respuesta) {
                            $('#div_carga').hide();
                            location.href = "appDesing/view/lobby.php";

                        },
                        error: function () {

                        }
                    });

                }


            },
            error: function () {

            }
        });

    }
}
;



$(document).ready(function () {

    $("#btnIngresar").click(function () {
        logIn();
    });

    $("#btnIngresar").keypress(function (e) {
        var code = (e.keyCode ? e.keyCode : e.which);
        if (code == 13) {
            logIn();
        }
    });

    $("#txtPs").keypress(function (e) {
        var code = (e.keyCode ? e.keyCode : e.which);
        if (code == 13) {
            logIn();
        }
    });

    $("#txtUs").keypress(function (e) {
        var code = (e.keyCode ? e.keyCode : e.which);
        if (code == 13) {
            logIn();
        }
    });

});

