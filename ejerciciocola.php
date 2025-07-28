<?php
# Procesamiento de pedidos en una tienda online
// Cada pedido contiene informacion del cliente y los productos. Los pedidos se atienden en orden de llegada, aplicar la estructura de Cola.
 
$pedidos = [
    [
        "cliente" => "Carlos",
        "productos" => ["Camiseta","Pantalon"]
    ],
    [
        "cliente" => "Laura",
        "productos" => ["Vestido rosa","Blusa"]
    ],
    [
        "cliente" => "Juanito",
        "productos" => ["Gorra","Falda floreada"]
    ],
];

echo "<h1>Ejercicio Cola - Procesamiento de pedidos</h1>" . "<br>";
echo "<h2>Pedidos Actuales</h2>";

foreach($pedidos as $item){
    echo "<br>Cliente: " . $item["cliente"];
    echo "<br>Lista de Productos: " . implode(', ', $item["productos"])."<br>";
};

echo "<br>";
echo "<b>Procesando Pedido del Cliente: </b>". array_shift($pedidos)["cliente"];


echo "<h2> Pedidos Pendientes</h2>";
foreach($pedidos as $item){
    echo "<br>Cliente: " . $item["cliente"];
    echo "<br>Lista de Productos: " . implode(', ', $item["productos"])."<br>";
};
?>