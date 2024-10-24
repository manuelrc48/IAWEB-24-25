<?php
/*. . Escribe un script PHP que realice la simulación de lanzar dos dados y muestre una imagen
con los valores obtenidos en cada uno de los dados*/

$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

$imagenes = [
    1 => 'dado1.png',
    2 => 'dado 2.png',
    3 => 'dado3.jpg',
    4 => 'dado4.png',
    5 => 'dado5.jpg',
    6 => 'dado6.jpg'
];

$imagen1 = $imagenes[$dado1];
$imagen2 = $imagenes[$dado2];

echo "<h2>Resultados del lanzamiento de dos dados:</h2>";
echo "<p>Dado 1: $dado1</p>";
echo "<img src='$imagen1' alt='Dado 1 mostrando $dado1' width='100' height='100'>";
echo "<p>Dado 2: $dado2</p>";
echo "<img src='$imagen2' alt='Dado 2 mostrando $dado2' width='100' height='100'>";
?>
