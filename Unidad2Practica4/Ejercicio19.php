<?php
/*. Muestra el array del ejercicio anterior pero en orden inverso.*/ 

$animales = array("lagartija", "araña", "perro", "gato", "ratón");
$numeros = array(12, 34, 45, 52, 12);
$arboles = array("sauce", "pino", "naranjo", "chopo", "perro", 34);

$array_completo = array();

array_push($array_completo, ...$animales);
array_push($array_completo, ...$numeros);
array_push($array_completo, ...$arboles);

$array_invertido = array_reverse($array_completo);

echo "<pre>";
print_r($array_invertido);
echo "</pre>";
?>
