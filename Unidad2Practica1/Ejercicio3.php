<?php
/*Escribe un script PHP que genere un número aleatorio entre 1 y 7, y muestre un mensaje
indicando a qué día de la semana corresponde*/

$díaNumero = rand(1, 7);

$díaSemana = '';

switch ($díaNumero) {
    case 1:
        $díaSemana = 'Lunes';
        break;
    case 2:
        $díaSemana = 'Martes';
        break;
    case 3:
        $díaSemana = 'Miércoles';
        break;
    case 4:
        $díaSemana = 'Jueves';
        break;
    case 5:
        $díaSemana = 'Viernes';
        break;
    case 6:
        $díaSemana = 'Sábado';
        break;
    case 7:
        $díaSemana = 'Domingo';
        break;
}

echo "El número generado es: $díaNumero, que corresponde a: $díaSemana.";
?>
