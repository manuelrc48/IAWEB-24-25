<?php

/*Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:
Calcular la media.
Calcular el valor máximo.
Calcular el valor mínimo.
Mostrar todos los valores calculados.
El array de temperaturas lo vamos a generar con números aleatorios. El array será de
10 elementos y los valores aletorios generados estarán entre 1 y 30.
 Resuelva el ejercicio utilizando bucles for.*/ 

$temperaturas = [];

for ($i = 0; $i < 10; $i++) {
    $temperaturas[] = rand(1, 30);
}

$suma = 0;
$maximo = $temperaturas[0];
$minimo = $temperaturas[0];

for ($i = 0; $i < count($temperaturas); $i++) {
    $suma += $temperaturas[$i]; 
    if ($temperaturas[$i] > $maximo) {
        $maximo = $temperaturas[$i]; 
    }
    if ($temperaturas[$i] < $minimo) {
        $minimo = $temperaturas[$i];
    }
}

$media = $suma / count($temperaturas);

echo "Temperaturas: " . implode(", ", $temperaturas) . "\n";
echo "La media es: " . $media . "\n";
echo "El valor máximo es: " . $maximo . "\n";
echo "El valor mínimo es: " . $minimo . "\n";
?>
