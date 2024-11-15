<?php
/*Crea un array llamado deportes e introduce los siguientes valores: futbol,
baloncesto, natación, tenis. Haz el recorrido de la matriz con un for para mostrar
sus valores. A continuación realiza las siguientes operaciones
 Muestra el total de valores que contiene.
 Sitúa el puntero en el primer elemento del array y muestra el valor actual, es
decir, donde está situado el puntero actualmente.
 Avanza una posición y muestra el valor actual.
 Coloca el puntero en la última posición y muestra su valor.
 Retrocede una posición y muestra este valor*/ 

$deportes = array("futbol", "baloncesto", "natación", "tenis");

echo "Recorriendo el array con un for:<br>";
for ($i = 0; $i < count($deportes); $i++) {
    echo "Valor en el índice $i: " . $deportes[$i] . "<br>";
}

$total_valores = count($deportes);
echo "<br>Total de valores en el array: $total_valores<br>";

$puntero = 0;
echo "<br>Puntero en el primer elemento (índice $puntero): " . $deportes[$puntero] . "<br>";

$puntero++;
echo "Avanzando una posición (índice $puntero): " . $deportes[$puntero] . "<br>";

$puntero = count($deportes) - 1;
echo "Puntero en la última posición (índice $puntero): " . $deportes[$puntero] . "<br>";

$puntero--;
echo "Retrocediendo una posición (índice $puntero): " . $deportes[$puntero] . "<br>";
?>
