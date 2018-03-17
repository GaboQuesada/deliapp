<?php

//$jsondata = file_get_contents('./config/config.json');
//$data = json_decode($jsondata, true);

/*
echo("<pre>");
print_r($data);
echo("</pre>");


echo "<br> <br>";

echo $data['configServerRemoto']['servername'];
echo $data['configType'];
 * *
 */


include './ws/settings.php';
include './ws/connect.php';
$jsondata = file_get_contents('./config/config.json');
$data = json_decode($jsondata, true);
$c = new Connect($data);

$c->test();


?>

