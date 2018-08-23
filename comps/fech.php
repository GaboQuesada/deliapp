<?php
echo date("d-m-Y h:i:s A");
echo "</br>";

$todayh = getdate();
$d = $todayh['mday'];
$m = $todayh['mon'];
$y = $todayh['year'];

$h = $todayh['hours'];
$mu = $todayh['minutes'];
$s = $todayh['seconds'];

$fecha= $d."-".$m."-".$y;
$hora = $h.":".$mu.":".$s;
echo $fecha;
echo "  ";
echo $hora;
?>
<hr>
<?php
if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}

if (ini_get('date.timezone')) {
    echo 'date.timezone: ' . ini_get('date.timezone');
}
?>
<hr> 

<?php
date_default_timezone_set('America/Costa_Rica');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))) {
    echo 'La zona horaria del script difiere de la zona horaria de la configuracion ini.';
} else {
    echo 'La zona horaria del script y la zona horaria de la configuración ini coinciden.';
}
?>
<hr>
<?php
$localtime = localtime();
$localtime_assoc = localtime(time(), true);
print_r($localtime);
print_r($localtime_assoc);
?>
<hr>
<?php
$today = getdate();
print_r($today);
?>
<hr> 
<?php

$timeoneservwe =  ini_get('date.timezone');
date_default_timezone_set($timeoneservwe);
$datetime = date("d-m-Y h:i:s A");
echo $datetime->format('Ymd H:i:s') . "\n";
$la_time = new DateTimeZone('America/Costa_Rica'); 
$datetime->setTimezone($la_time);
echo $datetime->format('Ymd H:i:s'); 
?>