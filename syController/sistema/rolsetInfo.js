
function setRoleInfo(nb, de) {



    $("#rolsetnb").val(nb);
    $("#rolsetde").val(de);
    $("#labelrol").text(nb);
    $("#boxinfoshowrole").show();
    $("#boxalert").hide();
    
     $.ajax({
        url: "../syModel/modulo/getAll.php",
        type: 'POST',
        dataType: "json",
        beforeSend: function () {

        },
        success: function (respuesta) {


            var datosrespuesta = respuesta.resultados;
            $("#accordion").empty();
            
            tam =0;
            $.each(datosrespuesta, function (i, item) {


if(datosrespuesta[i].ses_et === 'ct'){
      $("#accordion").append('\n\
       <div class="card">\n\
                    <div class="card-header" id="headingOne'+tam+'">\n\
<div  data-toggle="collapse" data-target="#collapseOne'+tam+'" aria-expanded="true" aria-controls="collapseOne">\n\
                               <a class=" mibox row  "  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">\n\
                            <div class="col-lg" style="padding-left: 45px;">\n\
                                <i class="material-icons" style="font-size: 60px;">'+datosrespuesta[i].ses_im+'</i>\n\
                            </div>\n\
                            <div class="col-lg align-self-center">\n\
                               ' + datosrespuesta[i].ses_no + '\n\
                            </div>\n\
                            <div class="col-lg">\n\
                            </div>\n\
                        </a>\n\
                            </div>\n\
                    </div>\n\
                    <div id="collapseOne'+tam+'" class="collapse " aria-labelledby="headingOne'+tam+'" data-parent="#accordion"> \n\
                        <div class="card-body"> \n\
                            <div class="btn-group btn-group-sm" role="group" style="margin-bottom: 5px;" aria-label="..."> \n\
                                <button type="button" class="btn btn-outline-dark"><i class="fas fa-check-circle"></i> Conceder todos los accesos</button> \n\
                                <button type="button" class="btn btn-outline-dark"><i class="fas fa-ban" ></i> Rebocar todos los accesos</button> \n\
                            </div> \n\
                            <br> \n\
                            <ul class="list-group" id="showrolesd"> \n\
                                <li class="list-group-item miitem" > \n\
                                    <div class="col-lg-7" style="display: inline-block; "><img src="../img/iconos/actividad.png" width="50" height="50" />Facturar</div> \n\
                                    <div class="col-lg-4" style="display: inline-block"> Estado:    <i class="fas fa-check-circle" style="font-size: 30px; color: green;"></i> </div></li> \n\
                                <li class="list-group-item miitem"> \n\
                                    <div class="col-lg-7" style="display: inline-block; "><img src="../img/iconos/identidad.png" width="50" height="50" >Pedidos</div> \n\
                                    <div class="col-lg-4" style="display: inline-block"> Estado:     <i class="fas fa-ban"  style="font-size: 30px; color: red;"></i> </div></li> \n\
                            </ul> \n\
                        </div> \n\
                    </div>\n\
                </div>\n\
                ');
       //
                    
   tam = tam+1; 
}

              

            });
        },
        error: function () {

            alert("Ocurrio un error en la llamada Ajax Er:cod 255");
        }
    });




}

$(document).ready(function (){
      $("#boxinfoshowrole").hide();
     $("#boxalert").show();
});