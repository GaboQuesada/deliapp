

function pass() {

 
 
    $.ajax({
        url: "starService.php",
        type: 'POST',
        dataType: "json",
         data: {us:"adri", pa:"adri"},
        beforeSend: function () {



        },
        success: function (respuesta) {
             
             
              location.href = "sesiones.php";
           

        },
        error: function () {
            alert("fallo 1");
        }
    });
   
}

$(document).ready(function (){
    

    
    $("#btnconec").click(function (){
        
        pass();
        
    })
    
})
