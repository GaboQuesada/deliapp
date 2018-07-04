


function updateRoll() {

    var nombre = $("#rolsetnb").val();
    var descripcion = $("#rolsetde").val();


    var datos = new Array();
    var nb = new objPrm("Nombre", nombre);
    datos.push(nb);
    var pb = new objPrm("Descripción", descripcion);
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
            url: "../syModel/roles/ifExist.php",
            type: 'POST',
            dataType: "json",
            data: {no: $("#rolsetnb").val()},
            beforeSend: function () {

            },
            success: function (respuesta) {

                var tam = respuesta.resultados;


                if (tam == 0) {


                    $.ajax({
                        url: "../syModel/roles/upDate.php",
                        type: 'POST',
                        dataType: "json",
                        data: {no: nombre, de: descripcion, id:$("#rolid").val()},
                        beforeSend: function () {
                            $('#div_cargax').show();
                        },
                        success: function (respuesta) {


                            

                           
                            getRoles();
                            alertify.success("El role ha sido modificado.");
                           $('#upromh').click();




                            $('#div_cargax').hide();



                        },
                        error: function () {

                            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
                        }
                    });


                } else {

                    alertify.error(res.nombre + " " + res.msj);
                    alertify.alert()
                            .setting({
                                'label': 'Entendido',
                                'message': 'El nombre de rol ya existe ' + res.nombre,
                                'onok': function () {
                                    alertify.success('Ahora si vamos a trabajar');
                                }
                            }).show();

                }


            },
            error: function () {

                alert("Ocurrio un error en la llamada Ajax Er:cod 255");
            }
        });
    }
}





$("#saveroldata").click(function (e) {
   e.preventDefault();
    updateRoll();


});

$(document).ready(function () {





});
