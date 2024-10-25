<?php
/*3. Escribe un script PHP que muestre en una tabla los números pares que existen entre 1 y 100.
Utiliza un bucle for.*/ 

echo "<table border='1'>";

for ($i = 2; $i <= 100; $i += 2) {
    echo "<tr><td>$i</td></tr>"; 
}

echo "</table>";
?>
