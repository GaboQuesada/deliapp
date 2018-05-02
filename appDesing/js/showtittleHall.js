

function setLabel(id) {

    switch (id) {
        case 'O':
            $("#menutitle").text("ORDENAR");
            break;
        case 'F':
            $("#menutitle").text("FACTURAR");
            break;
        case 'S':
            $("#menutitle").text("SISTEMA");
            break;
        case 'I':
            $("#menutitle").text("INVENTARIO");
            break;
    }



}

function RemoveLabel() {
    $("#menutitle").text("INICIO");
}

$(document).ready(function () {

    //alert("fff");
});

