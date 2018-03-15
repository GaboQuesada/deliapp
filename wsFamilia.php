
<?php

//POST
include './modelFamilia.php';



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


                if (isset($_POST['idHeredado']) || isset($_POST['familiaNombre'])) {
                    if (empty($_POST['idHeredado']) || empty($_POST['familiaNombre'])) {
                        $respuesta['estado'] = "4";
                        $respuesta['mensajelog'] = "Variable  definida pero vacìa (EMPTY ERROR)";
                        $respuesta['mensaje'] = "Faltan valores.";
                        $parametros = array(
                            'URL' => 'wsFamilia.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado'],
                            'familiaNombre' => $_POST['familiaNombre']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {
                        $nuevaFamilia = new Familia();
                        $nuevaFamilia->setIdHeredado($_POST['idHeredado']);
                        $nuevaFamilia->setFamiliaNombre($_POST['familiaNombre']);
                        $respuesta = $nuevaFamilia->insert();
                        $parametros = array(
                            'URL' => 'wsFamilia.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado'],
                            'familiaNombre' => $_POST['familiaNombre']);

                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    }
                } else {

                    $respuesta['estado'] = "3";
                    $respuesta['mensajelog'] = "Variable  no definida (NULL ERROR)";
                    $respuesta['mensaje'] = "Faltan valores.";
                    $parametros = array(
                        'URL' => 'wsFamilia.php',
                        'metodo' => 'POST',
                        'action' => $action,
                        'idHeredado' => $_POST['idHeredado'],
                        'familiaNombre' => $_POST['familiaNombre']);

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
                            'URL' => 'wsFamilia.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'id' => $_POST['id']);
                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {

                        $nuevaFamilia = new Familia();
                        $nuevaFamilia->setId($_POST['id']);
                        $respuesta = $nuevaFamilia->getById();
                        $parametros = array(
                            'URL' => 'wsFamilia.php',
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
                        'URL' => 'wsFamilia.php',
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
                            'URL' => 'wsFamilia.php',
                            'metodo' => 'POST',
                            'action' => $action,
                            'idHeredado' => $_POST['idHeredado']);
                        $respuesta['parametros'] = $parametros;
                        print json_encode($respuesta);
                    } else {

                        $nuevaFamilia = new Familia();
                        $nuevaFamilia->setIdHeredado($_POST['idHeredado']);
                        $respuesta = $nuevaFamilia->getByIdHeredado();
                        $parametros = array(
                            'URL' => 'wsFamilia.php',
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
                        'URL' => 'wsFamilia.php',
                        'metodo' => 'POST',
                        'action' => $action,
                        'idHeredado' => $_POST['idHeredado']);
                    $respuesta['parametros'] = $parametros;
                    print json_encode($respuesta);
                }

                break;

            case "getAll":

                $nuevaFamilia = new Familia();
                print json_encode($nuevaFamilia->getALL());

                break;
        }
    }
} else {

    $respuesta['estado'] = "3";
    $respuesta['mensajelog'] = "Variable action no definida (NULL ERROR)";
    $respuesta['mensaje'] = "Falta el valor del action.";
    $parametros = array(
        'URL' => 'wsFamilia.php',
        'metodo' => 'POST',
        'action' => $action);
    $respuesta['parametros'] = $parametros;
    print json_encode($respuesta);
}
?>



