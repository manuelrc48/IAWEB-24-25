<?php
/*Crea un array con los siguientes valores: 5->1, 12->2, 13->56, x->42. Muestra el
contenido. Cuenta el número de elementos que tiene y muéstralo por pantalla. A
continuación borrar el contenido de posición 5. Vuelve a mostrar el contenido y
por último elimina el array.
*/

$valores = array(
    5 => 1,
    12 => 2,
    13 => 56,
    'x' => 42
);

echo "<pre>";
print_r($valores);
echo "</pre>";

$numero_elementos = count($valores);
echo "El número de elementos en el array es: $numero_elementos<br>";

unset($valores[5]);

echo "<pre>";
print_r($valores);
echo "</pre>";

unset($valores);

if (empty($valores)) {
    echo "El array ha sido eliminado.";
}
?>
