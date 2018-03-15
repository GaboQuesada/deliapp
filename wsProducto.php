<?php

//POST
include './modelProducto.php';



if (isset($_POST['action'])) {
    if (empty($_POST['action'])) {
        $respuesta['estado'] = "4";
        $respuesta['mensajelog'] = "Variable action definida pero vacìa (EMPTY ERROR)";
        $respuesta['mensaje'] = "Falta el valor del action.";
        $parametros = array(
            'URL' => 'wsProducto.php',
            'metodo' => 'POST',
            'action' => $action);
        $respuesta['parametros'] = $parametros;
        print json_encode($respuesta);
    } else {

        $action = $_POST['action'];

        switch ($action) {

            case "insert":


                if (isset($_POST['idHeredado']) || isset($_POST['descrip'])|| isset($_POST['precio'])|| isset($_POST['grupo'])|| isset($_POST['familia'])) {
                    if (empty($_POST['idHeredado']) || empty($_POST['descrip'])|| empty($_POST['precio'])|| empty($_POST['grupo'])|| empty($_POST['familia'])) {
                        $respuesta['estado'] = "4";
                        $respuesta['mensajelog'] = "Variable  definida pero vacìa (EMPTY ERROR)";
                        $respuesta['mensaje'] = "Faltan valores.";
                        $parametros = array(
                            'URL' => 'wsProducto.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado'],
                            'descrip' => $_POST['descrip'],
                            'precio' => $_POST['precio'],
                            'grupo' => $_POST['grupo'],
                            'familia' => $_POST['familia']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {
                        $nuevoProducto = new Producto();
                        $nuevoProducto->setIdHeredado($_POST['idHeredado']);
                        $nuevoProducto->setDescrip($_POST['descrip']);
                        $nuevoProducto->setFamilia($_POST['familia']);
                        $nuevoProducto->setGrupo($_POST['grupo']);
                        $nuevoProducto->setPrecio($_POST['precio']);
                        $respuesta = $nuevoProducto->insert();
                        $parametros = array(
                            'URL' => 'wsProducto.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado'],
                            'descrip' => $_POST['descrip'],
                            'precio' => $_POST['precio'],
                            'grupo' => $_POST['grupo'],
                            'familia' => $_POST['familia']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    }
                } else {

                    $respuesta['estado'] = "3";
                    $respuesta['mensajelog'] = "Variable  no definida (NULL ERROR)";
                    $respuesta['mensaje'] = "Faltan valores.";
                     $parametros = array(
                            'URL' => 'wsProducto.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado'],
                            'descrip' => $_POST['descrip'],
                            'precio' => $_POST['precio'],
                            'grupo' => $_POST['grupo'],
                            'familia' => $_POST['familia']);

                    $respuesta['parametros'] = $parametros;
                    print json_encode($respuesta);
                }
                break;
            case "getById":

                if (isset($_POST['id'])) {

                    if (empty($_POST['id'])) {
                        $respuesta['estado'] = "4";
                        $respuesta['mensajelog'] = "Variable id definida pero vacìa (EMPTY ERROR)";
                        $respuesta['mensaje'] = "Falta el valor del id.";
                        $parametros = array(
                            'URL' => 'wsProducto.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'id' => $_POST['id']);
                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {

                         $nuevoProducto = new Producto();
                        $nuevoProducto->setId($_POST['id']);
                        $respuesta = $nuevoProducto->getById();
                        $parametros = array(
                            'URL' => 'wsProducto.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'id' => $_POST['id']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    }
                } else {

                    $respuesta['estado'] = "3";
                    $respuesta['mensajelog'] = "Variable id no definida (NULL ERROR)";
                    $respuesta['mensaje'] = "Falta el valor del id.";
                    $parametros = array(
                        'URL' => 'wsProducto.php',
                        'metodo' => 'POST',
                        'action' => $action,
                        'id' => $_POST['id']);
                    $respuesta['parametros'] = $parametros;
                    print json_encode($respuesta);
                }



                break;

            case "getByIdHeredado":

                if (isset($_POST['idHeredado'])) {

                    if (empty($_POST['idHeredado'])) {
                        $respuesta['estado'] = "4";
                        $respuesta['mensajelog'] = "Variable id definida pero vacìa (EMPTY ERROR)";
                        $respuesta['mensaje'] = "Falta el valor del idHeredado.";
                        $parametros = array(
                            'URL' => 'wsProducto.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado']);
                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {

                         $nuevoProducto = new Producto();
                        $nuevoProducto->setIdHeredado($_POST['idHeredado']);
                        $respuesta = $nuevoProducto->getByIdHeredado();
                        $parametros = array(
                            'URL' => 'wsProducto.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    }
                } else {

                    $respuesta['estado'] = "3";
                    $respuesta['mensajelog'] = "Variable id no definida (NULL ERROR)";
                    $respuesta['mensaje'] = "Falta el valor del idHeredado.";
                    $parametros = array(
                        'URL' => 'wsProducto.php',
                        'metodo' => 'POST',
                        'action' => $action,
                        'idHeredado' => $_POST['idHeredado']);
                    $respuesta['parametros'] = $parametros;
                    print json_encode($respuesta);
                }

                break;
                

            case "getAll":

                 $nuevoProducto = new Producto();
                print json_encode($nuevoProducto->getALL());

                break;
        }
    }
} else {

    $respuesta['estado'] = "3";
    $respuesta['mensajelog'] = "Variable action no definida (NULL ERROR)";
    $respuesta['mensaje'] = "Falta el valor del action.";
    $parametros = array(
        'URL' => 'wsProducto.php',
        'metodo' => 'POST',
        'action' => $action);
    $respuesta['parametros'] = $parametros;
    print json_encode($respuesta);
}
?>




