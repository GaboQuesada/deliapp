

$(document).ready(function () {

    
    
    
     $("#A").click(function (){
         switcher("A");
         
     });
     
     $("#B").click(function (){
         switcher("B");
         
     });
     
     
     
     
    
    
    

});

function switcher(opt)
{

    switch (opt) {

        case "A":
            $("#pagecontentbox").load("insertar.php");
            break;
        case "B":
             $("#pagecontentbox").load("actividades.php");
            break;
    }


}