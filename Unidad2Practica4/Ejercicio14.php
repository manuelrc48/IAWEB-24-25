<?php
/*Repite el ejercicio anterior pero ahora si se han de crear índices asociativos,
ejemplo:
El índice del array que contiene como valor Madrid es MD. */ 

$ciudades = array(
    "MD" => "Madrid",
    "BCN" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Ángeles",
    "CHI" => "Chicago"
);

foreach ($ciudades as $indice => $ciudad) {
    echo "La ciudad con el índice $indice tiene el nombre de $ciudad.<br>";
}
?>
