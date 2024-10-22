<?php
/*Escribe un script que realice la simulación de lanzar un dado y
muestre una imagen con un valor aleatorio entre 1 y 6*/

$dado = rand(1,6);
if ($dado ==1) {
    echo '<img src="dado1.png" alt="Dado: 1">';
} elseif ($dado == 2) {
    echo '<img src="dado 2.png" alt="Dado: 2">';
} elseif ($dado == 3) {
    echo '<img src="dado3.jpg" alt="Dado: 3">';
} elseif ($dado == 4) {
    echo '<img src="dado4.png" alt="Dado: 4">';
} elseif ($dado == 5) {
    echo '<img src="dado5.jpg" alt="Dado: 5">';
} else {
    echo '<img src="dado6.jpg" alt="Dado: 6">';
}
?>
