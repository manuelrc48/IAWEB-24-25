<?php

/*. Escribe un script PHP que realice las siguientes acciones:
Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
Una vez que ha inicializado el array, imprima todos los valores que almacena.
Buscar el valor máximo de los valores del array.
Muestre el valor máximo que ha encontrado.*/

$numeros = [];

for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 30);
}

echo "Los valores del array son:\n";
foreach ($numeros as $numero) {
    echo $numero . "\n";
}

$maximo = max($numeros); 

echo "El valor máximo es: " . $maximo . "\n";
?>
