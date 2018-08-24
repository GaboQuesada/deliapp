$(document).ready(function () {


    $("#btnchm").click(function () {

        if ($("#mpcdi").val() === "nd" || $("#mpcdf").val() === "nd" || $("#mpchi").val() === "nd" || $("#mpchf").val() === "nd") {


            alertify.error("Faltan datos");
            alertify.alert()
                    .setting({
                        'label': 'Entendido',
                        'message': 'Todos los datos son necesarios.',
                        'onok': function () {
                            alertify.success('Ahora si vamos a trabajar');
                        }
                    }).show();


        } else {

            if ($("#mpcdf").val() !== "0" && $("#mpcdi").val() > $("#mpcdf").val()) {

                alertify.error("Datos incorrectos");
                alertify.alert()
                        .setting({
                            'label': 'Entendido',
                            'message': 'El dia de inicio no puede ser anterior al dia de fin.',
                            'onok': function () {
                                alertify.success('Ahora si vamos a trabajar');
                            }
                        }).show();


            } else {

                if ($("#mpcdi").val() === $("#mpcdf").val()) {

                    if (sumh() === "t") {
                        alertify.confirm('el acceso se dara de alta', 'Recuerde que fuera de este rango la caja no podra ser accedida', function () {


                            $.ajax({
                                url: "model/CAJAACCESOupdate.php",
                                type: 'POST',
                                dataType: "json",
                                data: {id: $("#mcid").val(), di: $("#mpcdi").val(), df: $("#mpcdf").val(), hi: $("#mpchi").val(), hf: $("#mpchf").val()},
                                beforeSend: function () {

                                },
                                success: function (respuesta) {
                                    alertify.success('Modificado');
                                    getAllUserByCaja();
                                    $("#off").click();

                                },
                                error: function () {

                                }
                            });

                        }
                        , function () {
                            alertify.error('Cancel')
                        });
                    } else {
                        alertify.error("Datos incorrectos");
                        alertify.alert()
                                .setting({
                                    'label': 'Entendido',
                                    'message': 'El hora de inicio no puede ser mayor a la hora del fin.',
                                    'onok': function () {
                                        alertify.success('Ahora si vamos a trabajar');
                                    }
                                }).show();
                    }

                } else {
                    alertify.confirm('Modificar', 'Esto sera evidente en el proximo inicio de sesion ', function () {


                        $.ajax({
                            url: "model/CAJAACCESOupdate.php",
                            type: 'POST',
                            dataType: "json",
                            data: {id: $("#mcid").val(), di: $("#mpcdi").val(), df: $("#mpcdf").val(), hi: $("#mpchi").val(), hf: $("#mpchf").val()},
                            beforeSend: function () {

                            },
                            success: function (respuesta) {
                                alertify.success('Modificado');
                                getAllUserByCaja();
                                $("#off").click();

                            },
                            error: function () {

                            }
                        });

                    }
                    , function () {
                        alertify.error('Cancel')
                    });
                }

            }
        }

    });





});




function sumh() {

    var hi = $("#mpchi").val(); // hora inicio
    var hf = $("#mpchf").val(); // hora final

    var his = rhora(hi);       // obteniendo solo el numero h.inicio
    var hfs = rhora(hf);       // obteniendo solo el numero h.fin

    if (his <= hfs) {
        return 't';            // la hora de inicio es menor a la del fin 
    } else {
        return 'f';            // la hora de inicio es mayor a la del fin 
    }

}

function rhora(hour) {

    var tamn = hour.length;

    if (tamn >= 3) {

        var res = hour.split(".");
        $re = res[0];
        return $re;

    } else {

        $re = hour;
        return $re;
    }
}