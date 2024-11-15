<?php
/*Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por
pantalla. Utiliza la función array_merge()*/ 

$animales = array("lagartija", "araña", "perro", "gato", "ratón");
$numeros = array(12, 34, 45, 52, 12);
$arboles = array("sauce", "pino", "naranjo", "chopo", "perro", 34);

$array_completo = array_merge($animales, $numeros, $arboles);

echo "<pre>";
print_r($array_completo);
echo "</pre>";
?>
