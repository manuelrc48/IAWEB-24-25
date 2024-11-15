<?php
/*Llenar una matriz de 20x20 con valores aleatorios. Sumar las columnas e
imprimir la columna que tuvo la máxima suma y la suma de esa columna*/ 

$matriz = array();
$sumasColumnas = array_fill(0, 20, 0);
$maxSuma = -PHP_INT_MAX;
$columnaMax = 0;

for ($i = 0; $i < 20; $i++) {
    for ($j = 0; $j < 20; $j++) {
        $matriz[$i][$j] = rand(1, 100);
        $sumasColumnas[$j] += $matriz[$i][$j];
    }
}

for ($j = 0; $j < 20; $j++) {
    if ($sumasColumnas[$j] > $maxSuma) {
        $maxSuma = $sumasColumnas[$j];
        $columnaMax = $j;
    }
}

echo "Matriz generada:<br>";
for ($i = 0; $i < 20; $i++) {
    for ($j = 0; $j < 20; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

echo "La columna con la máxima suma es la columna $columnaMax, con una suma de $maxSuma.<br>";
?>
