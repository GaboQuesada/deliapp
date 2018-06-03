function modificar() {

    var ced = $("#ceu").val();
    var nom = $("#nou").val();
    var ape1 = $("#ap1u").val();
    var ape2 = $("#ap2u").val();
    var fen = $("#fnu").val();
    var car = $("#cau").val();
    var dep = $("#deu").val();


    var datos = new Array();
    var pce = new objPrm("Cédula", ced);
    datos.push(pce);
    var pnom = new objPrm("Nombre", nom);
    datos.push(pnom);
    var pape1 = new objPrm("Primer Apellido", ape1);
    datos.push(pape1);
    var pape2 = new objPrm("Segundo Apellido", ape2);
    datos.push(pape2);


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
            url: "../syModel/planilla/upDate.php",
            type: 'POST',
            dataType: "json",
            data: {no: nom, ap1: ape1, ap2: ape2, fn: fen, ca: car, de: dep, ce: ced},
            beforeSend: function () {
                $('#div_cargax').show();
            },
            success: function (respuesta) {

                $("#acCancelarurr").click();
                alertify.success("Registro modificado a Planilla.");
                show(0);
                $('#div_cargax').hide();


            },
            error: function () {

                alert("Ocurrio un error en la llamada Ajax Er:cod 255");
            }
        });

    }
}


$("#acGuardarurr").click(function () {
    modificar();
});