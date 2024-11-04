<?php

/*Escribe un script PHP que realice las siguientes acciones:
Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprima todos los valores que almacena.
Calcular el valor medio de los valores del array.
Mostrar el valor medio que ha calculado.*/

$numeros = [];

for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 30);
}

echo "Los valores del array son:\n";
foreach ($numeros as $numero) {
    echo $numero . "\n";
}

$suma = array_sum($numeros); 
$media = $suma / count($numeros); 

echo "El valor medio es: " . $media . "\n";
?>
