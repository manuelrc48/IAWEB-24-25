<?php
/*. Escribe un script PHP que permita ordenar el siguiente array asociativo:
array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")
De forma ascendente ordenado por valor.
De forma ascendente ordenado por clave.
De forma descendente ordenado por valor.
De forma descendente ordenado por clave.
Función asort,ksort,arsort,krsort.*/ 

$edades = array("Antonio" => "31", "María" => "28", "Juan" => "29", "Pepe" => "27");

asort($edades);
echo "Ordenado por valor (ascendente):\n";
foreach ($edades as $nombre => $edad) {
    echo "$nombre => $edad\n";
}
echo "\n";

ksort($edades);
echo "Ordenado por clave (ascendente):\n";
foreach ($edades as $nombre => $edad) {
    echo "$nombre => $edad\n";
}
echo "\n";

arsort($edades);
echo "Ordenado por valor (descendente):\n";
foreach ($edades as $nombre => $edad) {
    echo "$nombre => $edad\n";
}
echo "\n";

krsort($edades);
echo "Ordenado por clave (descendente):\n";
foreach ($edades as $nombre => $edad) {
    echo "$nombre => $edad\n";
}
?>
