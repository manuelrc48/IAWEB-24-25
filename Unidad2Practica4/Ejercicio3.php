<?php
/*Almacena en un array los 10 primeros números pares. Imprímelos cada uno en
una línea.*/
$pares = array();

for ($i = 0; $i < 10; $i++) {
    $pares[] = 2 * ($i + 1);
}

foreach ($pares as $par) {
    echo $par . "<br>";
}
?>
