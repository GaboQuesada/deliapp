



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
                    'message': 'Se requiere que llene los campos ',
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();
    } else if (isEmptyText(pps)) {
        alertify.error("contraseña no indicada");
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Se requiere que llene los campos ',
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

            },
            success: function (respuesta) {


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

});

