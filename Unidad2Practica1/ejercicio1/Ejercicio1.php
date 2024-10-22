<?php
/*Escribe un script que simule el comportamiento de lanzar una moneda al aire 
y muestre una imagen con la cara o la cruz de la moneda*/
$moneda = rand (0,1);
if ($moneda==0){
    echo "Ha salido cara";
   echo '<img src="cara.jpg" alt="cara" width="600" height="400">';
   
}
else {
    echo "Ha salido cruz";
    echo '<img src="cruz.jpg" alt="cruz" width="600" height="400">';
}
