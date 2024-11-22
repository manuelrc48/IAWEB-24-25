<?php

switch ($_POST['boton']) {
    case 'Suma':
        $suma = $_POST['numero1'] + $_POST['numero2'];
        echo "la suma es $suma";
        break;
    case 'Resta':
        $resta = $_POST['numero1'] - $_POST['numero2'];
        echo "la resta es $resta";
        break;
    case 'Multiplicacion':
        $multiplicacion = $_POST['numero1'] * $_POST['numero2'];
        echo "la multiplicacion es $multiplicacion";
        break;
     case 'Division':
        $division = $_POST['numero1'] / $_POST['numero2'];
        echo "la division es $division";
        break;
}

?>