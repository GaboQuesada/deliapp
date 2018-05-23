

function login() {

    var datos = new Array();
    var nb = new objPrm("Nombre",$("#nb").val());
    datos.push(nb);
    var pb = new objPrm("Contraseña",$("#pb").val());
    datos.push(pb);

    var res = new objRes();
    res = validarEsVacido(datos);
    
    if(res.est === "ko"){
        alertify.error(res.nombre+" "+res.msj);
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Por favor rellene el campo de '+res.nombre,
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();
        
    }else{
        
         $.ajax({
            url: "syModel/login/usuarioPassCheckCount.php",
            type: 'POST',
            dataType: "json",
            data: {us: $("#nb").val(), pa: $("#pb").val()},
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
                        url: "syModel/login/usuarioPassCheck.php",
                        type: 'POST',
                        dataType: "json",
                        data: {us: $("#nb").val(), ps: $("#pb").val()},
                        beforeSend: function () {

                        },
                        success: function (respuesta) {
                            $('#div_carga').hide();
                            location.href = "hall.php";

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

$(document).ready(function (){
    
    $("#btnEntrar").click(function (){
        
        login();
        
    });
   
});
