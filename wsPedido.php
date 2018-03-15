<?php

//POST
include './modelPedido.php';

if (isset($_POST['action'])) {
    if (empty($_POST['action'])) {
        $respuesta['estado'] = "4";
        $respuesta['mensajelog'] = "Variable action definida pero vacìa (EMPTY ERROR)";
        $respuesta['mensaje'] = "Falta el valor del action.";
        $parametros = array(
            'URL' => 'wsPedido.php',
            'metodo' => 'POST',
            'action' => $action);
        $respuesta['parametros'] = $parametros;
        print json_encode($respuesta);
    } else {

        $action = $_POST['action'];

        switch ($action) {

            case "insert":


                if (isset($_POST['mesaId']) || isset($_POST['productoId']) || isset($_POST['cantidad']) || isset($_POST['estado'])) {
                    if (empty($_POST['mesaId']) || empty($_POST['productoId']) || empty($_POST['cantidad']) || empty($_POST['estado'])) {
                        $respuesta['estado'] = "4";
                        $respuesta['mensajelog'] = "Variable  definida pero vacìa (EMPTY ERROR)";
                        $respuesta['mensaje'] = "Faltan valores.";
                        $parametros = array(
                            'URL' => 'wsPedido.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'mesaId' => $_POST['mesaId'],
                            'productoId' => $_POST['productoId'],
                            'cantidad' => $_POST['cantidad'],
                            'estado' => $_POST['estado']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {
                        $nuevoPedido = new Pedido();
                        $nuevoPedido->setCantidad($_POST['cantidad']);
                        $nuevoPedido->setEstado($_POST['estado']);
                        $nuevoPedido->setMesaId($_POST['mesaId']);
                        $nuevoPedido->setProductoId($_POST['productoId']);
                        
                        $respuesta = $nuevoPedido->insert();
                        $parametros = array(
                            'URL' => 'wsPedido.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'mesaId' => $_POST['mesaId'],
                            'productoId' => $_POST['productoId'],
                            'cantidad' => $_POST['cantidad'],
                            'estado' => $_POST['estado']);
                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    }
                } else {

                    $respuesta['estado'] = "3";
                    $respuesta['mensajelog'] = "Variable  no definida (NULL ERROR)";
                    $respuesta['mensaje'] = "Faltan valores.";
                    $parametros = array(
                        'URL' => 'wsPedido.php',
                        'metodo' => 'POST',
                        'action' => $action,
                        'mesaId' => $_POST['mesaId'],
                            'productoId' => $_POST['productoId'],
                            'cantidad' => $_POST['cantidad'],
                            'estado' => $_POST['estado']);

                    $respuesta['parametros'] = $parametros;
                    print json_encode($respuesta);
                }
                break;
            case "getByMesaId":
               
                if (isset($_POST['id'])) {

                    if (empty($_POST['id'])) {
                        $respuesta['estado'] = "4";
                        $respuesta['mensajelog'] = "Variable  definida pero vacìa (EMPTY ERROR)";
                        $respuesta['mensaje'] = "Falta el valor del id.";
                        $parametros = array(
                            'URL' => 'wsPedido.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'id' => $_POST['id']);
                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {

                        $nuevoPedido = new Pedido();
                        $nuevoPedido->setId($_POST['id']);
                        $respuesta = $nuevoPedido->getByMesaId();
                        $parametros = array(
                            'URL' => 'wsPedido.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'id' => $_POST['id']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    }
                } else {

                    $respuesta['estado'] = "3";
                    $respuesta['mensajelog'] = "Variable no definida (NULL ERROR)";
                    $respuesta['mensaje'] = "Falta el valor del id.";
                    $parametros = array(
                        'URL' => 'wsPedido.php',
                        'metodo' => 'POST',
                        'action' => $action,
                        'id' => $_POST['id']);
                    $respuesta['parametros'] = $parametros;
                    print json_encode($respuesta);
                }

                break;
        }
    }
} else {

    $respuesta['estado'] = "3";
    $respuesta['mensajelog'] = "Variable action no definida (NULL ERROR)";
    $respuesta['mensaje'] = "Falta el valor del action.";
    $parametros = array(
        'URL' => 'wsPedido.php',
        'metodo' => 'POST',
        'action' => $action);
    $respuesta['parametros'] = $parametros;
    print json_encode($respuesta);
}
?>




