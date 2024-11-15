<?php
/*Implementa un array asociativo con los siguientes valores:
Muestra los valores del array en una tabla, has de mostrar el índice y el valor
asociado.Elimina el estadio asociado al Real Madrid.
 Vuelve a mostrar los valores para comprobar que el valor ha sido eliminado, esta
vez en una lista numerada.*/ 

$estadios_futbol = array(
    "Barcelona" => "Camp Nou",
    "Real Madrid" => "Santiago Bernabéu",
    "Valencia" => "Mestalla",
    "Real Sociedad" => "Anoeta"
);

echo "<table border='1'>
        <tr>
            <th>Índice</th>
            <th>Estadio</th>
        </tr>";

foreach ($estadios_futbol as $equipo => $estadio) {
    echo "<tr>
            <td>$equipo</td>
            <td>$estadio</td>
          </tr>";
}

echo "</table>";

unset($estadios_futbol["Real Madrid"]);

echo "<ol>";

foreach ($estadios_futbol as $equipo => $estadio) {
    echo "<li>$equipo: $estadio</li>";
}

echo "</ol>";
?>
