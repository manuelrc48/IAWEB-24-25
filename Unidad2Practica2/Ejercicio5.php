<?php
/* Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for*/ 

echo "<h2>Tablas de multiplicar del 1 al 10</h2>";

for ($numero = 1; $numero <= 10; $numero++) {
    echo "<h3>Tabla del $numero</h3>";
    echo "<table border='1'>";
    
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr><td>$numero x $i = $resultado</td></tr>";
    }
    
    echo "</table><br>"; 
}
?>


