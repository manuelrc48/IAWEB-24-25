<?php
/*. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con
un valor aleatorio entre 1 y 6*/


$dado = rand(1, 6);


switch ($dado) {
    case 1:
        $imagen = 'dado1.png'; 
        break;
    case 2:
        $imagen = 'dado 2.png'; 
        break;
    case 3:
        $imagen = 'dado3.jpg'; 
        break;
    case 4:
        $imagen = 'dado4.png'; 
        break;
    case 5:
        $imagen = 'dado5.jpg'; 
        break;
    case 6:
        $imagen = 'dado6.jpg';
        break;
}

echo "Resultado del lanzamiento del dado: $dado\n";
echo "<img src='$imagen' alt='Dado mostrando $dado width='200' height='200' />";
?>
