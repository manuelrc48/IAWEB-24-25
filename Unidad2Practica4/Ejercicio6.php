<?php
/*. Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar
fila y columna del elemento mayor.*/ 

$matriz = array();
$max = -PHP_INT_MAX;
$maxFila = 0;
$maxColumna = 0;

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(1, 100);
        if ($matriz[$i][$j] > $max) {
            $max = $matriz[$i][$j];
            $maxFila = $i;
            $maxColumna = $j;
        }
    }
}

echo "Matriz generada:<br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "El valor máximo es $max, que se encuentra en la fila $maxFila y la columna $maxColumna.<br>";
?>
