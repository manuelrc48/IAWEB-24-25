<?php
/*Crea un array llamado “lenguajes_cliente” y otro “lenguajes_servidor”, crea tu
mismo los valores, poniendo índices alfanuméricos a cada valor con tres
elementos cada uno. Junta ambos arrays en uno solo llamado “lenguajes” y
muéstralo por pantalla en una tabla.*/

$lenguajes_cliente = array(
    "C1" => "JavaScript",
    "C2" => "HTML",
    "C3" => "CSS"
);

$lenguajes_servidor = array(
    "S1" => "PHP",
    "S2" => "Node.js",
    "S3" => "Python"
);

$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);

echo "<table border='1'>
        <tr>
            <th>Índice</th>
            <th>Lenguaje</th>
        </tr>";

foreach ($lenguajes as $indice => $lenguaje) {
    echo "<tr>
            <td>$indice</td>
            <td>$lenguaje</td>
          </tr>";
}

echo "</table>";
?>
