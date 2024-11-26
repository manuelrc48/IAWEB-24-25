<?php

/*5. Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna.En TABLA*/
$matriz = array();

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

echo "<h3>Impresión por fila:</h3>";
echo "<table border='1'>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 5; $j++) {
        echo "<td>" . $matriz[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

echo "<h3>Impresión por columna:</h3>";
echo "<table border='1'>";
for ($j = 0; $j < 5; $j++) {
    echo "<tr>";
    for ($i = 0; $i < 3; $i++) {
        echo "<td>" . $matriz[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
