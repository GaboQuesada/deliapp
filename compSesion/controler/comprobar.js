

function getExist() {
   
    var nombre = $("#nb").val();
    var contra = $("#pb").val();
    
    if(nombre === "" || contra === ""){
      
     
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Por favor rellene el campo que falta. ',
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();
        
    }else{
       
          $.ajax({
                url: "model/Exist.php",
                type: 'POST',
                dataType: "json",
                data: {us:nombre,pa:contra},
                beforeSend: function () {

                },
                success: function (respuesta) {

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
                        url: "model/obtpase.php",
                        type: 'POST',
                        dataType: "json",
                        data: {us:nombre, pa:contra},
                        beforeSend: function () {
                        },
                        success: function (respuesta) {

                            
                            location.href = "lobby.php";
                        },
                        error: function () {
                            alert("fallo 2");
                        }
                    });
                    
                }
                },
                error: function () {

                }
            });
        
        
        
    }
   
        
}


$(document).ready(function () {

    alert("vra4");
    
    
    $("#btnEntrar").click(function (event){
        event.preventDefault();
        getExist();
        
    })

});