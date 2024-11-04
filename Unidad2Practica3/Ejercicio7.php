<?php

/*Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:
Calcular la media.
Calcular el valor máximo.
Calcular el valor mínimo.
Mostrar todos los valores calculados.
El array de temperaturas lo vamos a generar con números aleatorios. El array será de
10 elementos y los valores aletorios generados estarán entre 1 y 30.
 Resuelva el ejercicio utilizando bucles do-while.*/ 

$temperaturas = [];
$i = 0;

do {
    $temperaturas[] = rand(1, 30);
    $i++;
} while ($i < 10);

$suma = 0;
$i = 0;

do {
    $suma += $temperaturas[$i];
    $i++;
} while ($i < count($temperaturas));
$media = $suma / count($temperaturas);

$maximo = $temperaturas[0];
$i = 1;

do {
    if ($temperaturas[$i] > $maximo) {
        $maximo = $temperaturas[$i];
    }
    $i++;
} while ($i < count($temperaturas));

$minimo = $temperaturas[0];
$i = 1;

do {
    if ($temperaturas[$i] < $minimo) {
        $minimo = $temperaturas[$i];
    }
    $i++;
} while ($i < count($temperaturas));

echo "Temperaturas: " . implode(", ", $temperaturas) . "\n";
echo "Media: " . round($media, 2) . "\n";
echo "Valor máximo: " . $maximo . "\n";
echo "Valor mínimo: " . $minimo

?>