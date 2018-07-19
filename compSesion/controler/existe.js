


function getExist() {
   
        alertify.alert()
                .setting({
                    'label': 'Entendido',
                    'message': 'Por favor rellene el campo que falta. ',
                    'onok': function () {
                        alertify.success('Ahora si vamos a trabajar');
                    }
                }).show();
}


$(document).ready(function () {

    
    
    $("#btnEntrar").click(function (event){
        event.preventDefault();
        getExist();
        
    })

});