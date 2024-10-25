<?php
/*Escribe un script PHP que muestre la tabla de multiplicar de un número aleatorio. Utiliza un
bucle for*/ 

$numeroAleatorio = rand(1, 10);

echo "<h2>Tabla de multiplicar del número $numeroAleatorio</h2>";
echo "<table border='1'>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numeroAleatorio * $i;
    echo "<tr><td>$numeroAleatorio x $i = $resultado</td></tr>"; 
}

echo "</table>";
?>
