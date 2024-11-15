<?php
/*Generar una matriz de 3x4 y generar un vector que contenga los valores máximos
de cada fila y otro que contenga los promedios de los mismos. Imprimir ambos
vectores a razón de uno por renglón.*/ 

$matriz = array();
$maximos = array();
$promedios = array();

for ($i = 0; $i < 3; $i++) {
    $suma = 0;
    $max = -PHP_INT_MAX;
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = rand(1, 100);
        $suma += $matriz[$i][$j];
        if ($matriz[$i][$j] > $max) {
            $max = $matriz[$i][$j];
        }
    }
    $maximos[] = $max;
    $promedios[] = $suma / 4;
}

echo "Vectores de máximos y promedios:<br>";

echo "Máximos: ";
foreach ($maximos as $max) {
    echo $max . " ";
}
echo "<br>";

echo "Promedios: ";
foreach ($promedios as $prom) {
    echo $prom . " ";
}
echo "<br>";
?>
