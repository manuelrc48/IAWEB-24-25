<?php
/* Crea una matriz para guardar a los amigos clasificados por diferentes ciudades.
Los valores serán los siguientes:
Haz un recorrido del array multidimensional mostrando los valores de tal manera
que nos muestre en cada ciudad que amigos tiene.*/

$amigos = array(
    "Madrid" => array(
        "nombre" => "Pedro",
        "edad" => 32,
        "telefono" => "91-999.99.99"
    ),
    "Barcelona" => array(
        "nombre" => "Susana",
        "edad" => 34,
        "telefono" => "93-000.00.00"
    ),
    "Toledo" => array(
        "nombre" => "Sonia",
        "edad" => 42,
        "telefono" => "925-09.09.09"
    )
);

foreach ($amigos as $ciudad => $datos) {
    echo "<strong>En $ciudad:</strong><br>";
    echo "Nombre: " . $datos["nombre"] . "<br>";
    echo "Edad: " . $datos["edad"] . "<br>";
    echo "Teléfono: " . $datos["telefono"] . "<br><br>";
}
?>
