
<?php

//POST
include './modelMesa.php';

if (isset($_POST['action'])) {
    if (empty($_POST['action'])) {
        $respuesta['estado'] = "4";
        $respuesta['mensajelog'] = "Variable action definida pero vacìa (EMPTY ERROR)";
        $respuesta['mensaje'] = "Falta el valor del action.";
        $parametros = array(
            'URL' => 'wsMesa.php',
            'metodo' => 'POST',
            'action' => $action);

        $respuesta['parametros'] = $parametros;
        print json_encode($respuesta);
    } else {

        $action = $_POST['action'];

        switch ($action) {

            case "insert":

                if (isset($_POST['idHeredado'])) {
                    if (empty($_POST['idHeredado'])) {
                        $respuesta['estado'] = "4";
                        $respuesta['mensajelog'] = "Variable idHeredado definida pero vacìa (EMPTY ERROR)";
                        $respuesta['mensaje'] = "Falta el valor del idHeredado.";
                        $parametros = array(
                            'URL' => 'wsMesa.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {
                        $nuevaMesa = new Mesa();
                        $nuevaMesa->setIdHeredado($_POST['idHeredado']);
                        $respuesta = $nuevaMesa->insert();
                        $parametros = array(
                            'URL' => 'wsMesa.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    }
                } else {

                    $respuesta['estado'] = "3";
                    $respuesta['mensajelog'] = "Variable idHeredado no definida (NULL ERROR)";
                    $respuesta['mensaje'] = "Falta el valor del idHeredado.";
                    $parametros = array(
                        'URL' => 'wsMesa.php',
                        'metodo' => 'POST',
                        'action' => $action,
                        'idHeredado' => $_POST['idHeredado']);

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
                            'URL' => 'wsMesa.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'id' => $_POST['id']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {
                        $nuevaMesa = new Mesa();
                        $nuevaMesa->setId($_POST['id']);
                        $respuesta = $nuevaMesa->getById();
                        $parametros = array(
                            'URL' => 'wsMesa.php',
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
                        'URL' => 'wsMesa.php',
                        'metodo' => 'POST',
                        'action' => $action,
                        'idHeredado' => $_POST['id']);
                    $respuesta['parametros'] = $parametros;
                    print json_encode($respuesta);
                }


                break;

            case "getByIdHeredado":


                if (isset($_POST['idHeredado'])) {
                    if (empty($_POST['idHeredado'])) {
                        $respuesta['estado'] = "4";
                        $respuesta['mensajelog'] = "Variable idHeredado definida pero vacìa (EMPTY ERROR)";
                        $respuesta['mensaje'] = "Falta el valor del idHeredado.";
                        $parametros = array(
                            'URL' => 'wsMesa.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {
                        $nuevaMesa = new Mesa();
                        $nuevaMesa->setIdHeredado($_POST['idHeredado']);
                        $respuesta = $nuevaMesa->getByIdHeredado();
                        $parametros = array(
                            'URL' => 'wsMesa.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    }
                } else {

                    $respuesta['estado'] = "3";
                    $respuesta['mensajelog'] = "Variable idHeredado no definida (NULL ERROR)";
                    $respuesta['mensaje'] = "Falta el valor del idHeredado.";
                    $parametros = array(
                        'URL' => 'wsMesa.php',
                        'metodo' => 'POST',
                        'action' => $action,
                        'idHeredado' => $_POST['idHeredado']);

                    $respuesta['parametros'] = $parametros;
                    print json_encode($respuesta);
                }

                break;

            case "getAll":

                $nuevaMesa = new Mesa();
                $respuesta = $nuevaMesa->getALL();
                $parametros = array(
                    'URL' => 'wsMesa.php',
                    'metodo' => 'POST',
                    'action' => $action);
                $respuesta['parametros'] = $parametros;
                print json_encode($respuesta);
                break;
        }
    }
} else {

    $respuesta['estado'] = "3";
    $respuesta['mensajelog'] = "Variable action no definida (NULL ERROR)";
    $respuesta['mensaje'] = "Falta el valor del action.";
    $parametros = array(
        'URL' => 'wsMesa.php',
        'metodo' => 'POST',
        'action' => $action);

    $respuesta['parametros'] = $parametros;
    print json_encode($respuesta);
}
?>