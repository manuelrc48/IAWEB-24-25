<?php
/* Escribe un script PHP que sobre un array de temperaturas realice las siguientes
operaciones:
Mostrar el listado ordenado de mayor a menor.
Mostrar el listado ordenado de menor a mayor.
El array de temperaturas lo vamos a generar con números aleatorios. El número de
elementos del array será especificado mediante un formulario y los valores aleatorios
generados estarán entre 1 y 30.
Función sort y rsort */

$numeroElementos = 10; 

$temperaturas = [];
for ($i = 0; $i < $numeroElementos; $i++) {
    $temperaturas[] = rand(1, 30);
}

sort($temperaturas);

$temperaturasDesc = $temperaturas; 
rsort($temperaturasDesc);

echo "Temperaturas (de menor a mayor): " . implode(", ", $temperaturas) . "\n";
echo "Temperaturas (de mayor a menor): " . implode(", ", $temperaturasDesc) . "\n";
?>


