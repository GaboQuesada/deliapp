

$(document).ready(function () {




    $("#A").click(function () {
        switcher("A");

    });

    $("#B").click(function () {
        switcher("B");

    });
    $("#C").click(function () {
        switcher("C");

    });







});

function switcher(opt)
{

    switch (opt) {

        case "A":
            $("#pagecontentbox").load("insertar.php");
            break;
        case "B":
            $("#pagecontentbox").load("roles.php");
            break;
        case "C":
            $("#pagecontentbox").load("modulos.php");
            break;
    }


}