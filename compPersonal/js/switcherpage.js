

function switcher(opt)
{

    switch (opt) {

        case "A":
            $("#pagecontentbox").load("insertar.php");
            break;
        case "B":
            $("#pagecontentbox").load("actividades.php");
            break;
        case "C":
            $("#pagecontentbox").load("departamentos.php");
            break;
        case "D":
            $("#pagecontentbox").load("planilla.php");
            break;
    }


}




$("#A").click(function () {
    switcher("A");

});

$("#B").click(function () {
    switcher("B");

});
$("#C").click(function () {
    switcher("C");

});
$("#D").click(function () {
    switcher("D");

});

$(document).ready(function () {

    switcher("D");

});
