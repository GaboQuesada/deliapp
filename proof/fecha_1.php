<?php
echo "Ejemplo con array numérico con la hora actual<br>";
print_r(localtime());

echo "Ejemplo con array asociativo con la hora actual<br>";
print_r(localtime(time(),true));

$hora = (localtime(time(),true));
echo "La hora actual extraída del array asociativo es: " . $hora["tm_mday"];



?>