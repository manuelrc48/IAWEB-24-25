<?php
/* Hacer un algoritmo que llene una matriz de 10x10 con valores aleatorios y
determine la posición [fila, columna] del número mayor almacenado en la matriz. */
$matriz = array();
$max = -PHP_INT_MAX;
$filaMax = 0;
$columnaMax = 0;

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $matriz[$i][$j] = rand(1, 100); // Llenar con números aleatorios entre 1 y 100
        if ($matriz[$i][$j] > $max) {
            $max = $matriz[$i][$j];
            $filaMax = $i;
            $columnaMax = $j;
        }
    }
}

echo "Matriz generada:<br>";
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "El número máximo es $max, y se encuentra en la posición [$filaMax, $columnaMax].<br>";
?>
