<?php
/*Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con
un valor aleatorio enre 1 y 6. Resuelva el ejercicio sin utilizar las estructuras de control if -
else y switch*/

$dado = rand(1, 6); 

$imagenes = [
    1 => 'dado1.png',
    2 => 'dado 2.png',
    3 => 'dado3.jpg',
    4 => 'dado4.png',
    5 => 'dado5.jpg',
    6 => 'dado6.jpg'
];

$imagen = $imagenes[$dado];

echo "Resultado del lanzamiento del dado: $dado<br>";
echo "<img src='$imagen' alt='Dado mostrando $dado  width='200' height='200' />";
?>
