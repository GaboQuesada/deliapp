
function setAcces(sid, itid) {



    $.ajax({
        url: "../syModel/submodulo/getByPermisoRolSub.php",
        type: 'POST',
        dataType: "json",
        data: {sp: sid, rp: $("#rolid").val()},
        beforeSend: function () {
//$('#div_cargax').show();
        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;



            if (datosrespuesta == 1) {

                alertify.confirm('Desea Revocar el acceso?', 'El Role no tendra control sobre este modulo', function () {


                    $.ajax({
                        url: "../syModel/acceso/delete.php",
                        type: 'POST',
                        dataType: "json",
                        data: {sm: sid, ro: $("#rolid").val()},
                        beforeSend: function () {
                            $('#div_cargax').show();
                        },
                        success: function (respuesta) {


                            alertify.success("El acceso a sido revocado.");


                            $("#" + itid).click();
                            
                           

                            $('#div_cargax').hide();
                             setclicks();



                        },
                        error: function () {

                            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
                        }
                    });


                }
                , function () {
                    alertify.error('Cancelado');
                });



            } else {

                alertify.confirm('Desea Otorgar el acceso?', 'El Role  tendra control sobre este modulo', function () {

                    $.ajax({
                        url: "../syModel/acceso/insert.php",
                        type: 'POST',
                        dataType: "json",
                        data: {sm: sid, ro: $("#rolid").val()},
                        beforeSend: function () {
                            $('#div_cargax').show();
                        },
                        success: function (respuesta) {


                            alertify.success("El acceso a sido otorgado.");



                            $("#" + itid).click();
                            $('#div_cargax').hide();
                           
                           setclicks();



                        },
                        error: function () {

                            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
                        }
                    });


                }
                , function () {
                    alertify.error('Cancelado');
                });


            }


            // $('#div_cargax').hide();

        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });



}


function setclicks(){
    
     $("#" + itid).click();
}
