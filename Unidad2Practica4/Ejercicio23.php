<?php
/* Crea un array multidimensional para poder guardar los componentes de dos
familias: “Los Simpson” y “Los Griffin” dentro de cada familia ha de constar el
padre, la madres y los hijos, donde padre, madre e hijos serán los índices y los
índices y los nombres serán los valores. Esta estructura se ha de crear en un solo
array asociativo de tres dimensiones.
Muestra los valores de las dos familias en una lista no numerada*/ 

$familias = array(
    "Los Simpson" => array(
        "padre" => "Hommer",
        "madre" => "Marge",
        "hijos" => array("Bart", "Lisa", "Maggie")
    ),
    "Los Griffin" => array(
        "padre" => "Peter",
        "madre" => "Lois",
        "hijos" => array("Chris", "Meg", "Stewie")
    )
);

echo "<ul>";

foreach ($familias as $familia => $componentes) {
    echo "<li><strong>$familia</strong>:</li>";
    echo "<ul>";
    foreach ($componentes as $rol => $nombre) {
        if (is_array($nombre)) {
            echo "<li><strong>Hijos:</strong> " . implode(", ", $nombre) . "</li>";
        } else {
            echo "<li><strong>" . ucfirst($rol) . ":</strong> $nombre</li>";
        }
    }
    echo "</ul>";
}

echo "</ul>";
?>
