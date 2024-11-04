<?php

/*Escribe un script PHP que realice las siguientes acciones:
Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprimir todos los valores que almacena*/

$numeros = [];

for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 30);
}

echo "Los valores del array son:\n";
foreach ($numeros as $numero) {
    echo $numero . "\n";
}
?>
