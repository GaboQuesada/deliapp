

$(document).ready(function () {

    
    
    
     $("#A").click(function (){
         switcher("A");
         
     });
    
    
    

});

function switcher(opt)
{

    switch (opt) {

        case "A":
            $("#pagecontentbox").load("insertar.php");
            break;
    }


}