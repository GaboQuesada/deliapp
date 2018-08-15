<?php

$var = $_POST;
$jsondata = array();
$jsondata['success'] = true;
$jsondata['message'] = 'Hola! El valor recibido es correcto.';

$tam = count($var);
$param = array();



foreach($var as $k => $v) {
    $sub = substr($v,0,3);
    $param[$sub]= $v;
   
   

}



foreach($param as $k => $v) {
   echo $k;
   echo ":";
   echo $v;
   echo ",";

}



foreach($var as $k => $v) {
    $jsondata[$k] = $v;

}


//header('Content-type: application/json; charset=utf-8');
//echo json_encode($jsondata);
exit();

