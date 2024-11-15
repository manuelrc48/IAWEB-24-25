<?php
/*Crea el código que dé respuesta al siguiente planteamiento:
Queremos almacenar en una matriz el número de alumnos con el que cuenta una
academia, ordenados en función del nivel y del idioma que se estudia. Tendremos
3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4
columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3
= Ruso). Mostrar por pantalla los alumnos que existen en cada nivel e idioma.*/

$alumnos = array(
    array(30, 25, 20, 15),
    array(40, 35, 30, 25),
    array(50, 45, 40, 35)
);

$niveles = array("Básico", "Medio", "Perfeccionamiento");
$idiomas = array("Inglés", "Francés", "Alemán", "Ruso");

for ($i = 0; $i < 3; $i++) {
    echo "Nivel " . $niveles[$i] . ":<br>";
    for ($j = 0; $j < 4; $j++) {
        echo "  " . $idiomas[$j] . ": " . $alumnos[$i][$j] . " alumnos<br>";
    }
    echo "<br>";
}
?>

