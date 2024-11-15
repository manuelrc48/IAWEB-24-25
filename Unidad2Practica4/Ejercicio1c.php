<?php
/* Declara un array de booleanos de nombre $confirmado e introduce en él seis
elementos que sean true, true, false, true, false, false. A continuación muestra por
pantalla el elemento con localizador cero. Deberás obtener por pantalla que se
muestra “true”.*/

$confirmado = array(true, true, false, true, false, false);

echo "El elemento en el localizador 0 es: " . ($confirmado[0] ? 'true' : 'false');
?>
