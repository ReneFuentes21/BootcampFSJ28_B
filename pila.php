<?php

#Aplicando una pila
$historial_navegacion = [];

array_push($historial_navegacion, "facebook","instagram","fortnite");
print_r($historial_navegacion);

echo "<h3>Eliminando la ultima visita</h3>";
echo array_pop($historial_navegacion). "<br>";
echo "<h3>Historial actualizado</h3>";
print_r($historial_navegacion);


?>