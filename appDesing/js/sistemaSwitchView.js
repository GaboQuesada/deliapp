

function showPageVertical(subsection)
{
    switch (subsection) {

        case 'P' : $("#contenedordesub").load('./vistasSistema/personal.php');
            break;
        case 'D' : $("#contenedordesub").load('./vistasSistema/Negocio.php');
            break;
        case 'I' : $("#contenedordesub").load('./vistasSistema/sistemainfo.php');
            break;
        case 'M' : $("#contenedordesub").load('./vistasSistema/menus.php');
            break;
        case 'C' : $("#contenedordesub").load('./vistasSistema/contabilidad.php');
            break;
    }


}



$(document).ready(function () {

  
});
