<?php 

#aplicando una cola
$clientes = [];

//Agregando elementos a un arreglo
array_push($clientes,"Rene");
array_push($clientes,"Rodrigo");
array_push($clientes,"Valeria");
array_push($clientes,"Kenia");

print_r($clientes);

//atendemos al primer cliente
echo "<h3>Atendiendo al primer cliente</h3>";
echo array_shift($clientes);
echo "<H3>Clientes pendientes haciendo fila</h3>";
print_r($clientes);
?>