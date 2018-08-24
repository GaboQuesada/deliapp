$(document).ready(function () {

    $("#newcashbox").submit(function (e) {
        e.preventDefault();

        if ($("#pcdi").val() === "nd" || $("#pcdf").val() === "nd" || $("#pchi").val() === "nd" || $("#pchf").val() === "nd" || $("#userSearch").val() === "") {


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

            if ($("#pcdf").val() !== "0" && $("#pcdi").val() > $("#pcdf").val()) {

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

                if ($("#pcdi").val() === $("#pcdf").val()) {

                    if (sumh() === "t") {
                        alertify.confirm('el acceso se dara de alta', 'Recuerde que fuera de este rango la caja no podra ser accedida', function () {


                            $.ajax({
                                url: "model/CAJAACCESOinsert.php",
                                type: 'POST',
                                dataType: "json",
                                data: {cjid: $("#cjid").val(), userSearchh: $("#userSearchh").val(), pcdi: $("#pcdi").val(), pcdf: $("#pcdf").val(), pchi: $("#pchi").val(), pchf: $("#pchf").val()},
                                beforeSend: function () {

                                },
                                success: function (respuesta) {
                                    alertify.success('Agregado');
                                    getAllUserByCaja();

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
                    alertify.confirm('el acceso se dara de alta', 'Recuerde que fuera de este rango la caja no podra ser accedida', function () {


                        $.ajax({
                            url: "model/CAJAACCESOinsert.php",
                            type: 'POST',
                            dataType: "json",
                            data: {cjid: $("#cjid").val(), userSearchh: $("#userSearchh").val(), pcdi: $("#pcdi").val(), pcdf: $("#pcdf").val(), pchi: $("#pchi").val(), pchf: $("#pchf").val()},
                            beforeSend: function () {

                            },
                            success: function (respuesta) {
                                alertify.success('Agregado');
                                getAllUserByCaja();

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

    var hi = $("#pchi").val(); // hora inicio
    var hf = $("#pchf").val(); // hora final

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