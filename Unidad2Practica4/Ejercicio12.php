<?php
/*Crea un array asociativo para introducir los datos de una persona
 Nombre: Pedro Torres
 Dirección: C/Mayor, 37
 Teléfono: 123456789
Al acabar muestra los datos por pantalla.*/ 

$persona = array(
    'nombre' => 'Pedro Torres',
    'direccion' => 'C/Mayor, 37',
    'telefono' => '123456789'
);

echo "Nombre: " . $persona['nombre'] . "<br>";
echo "Dirección: " . $persona['direccion'] . "<br>";
echo "Teléfono: " . $persona['telefono'] . "<br>";
?>
