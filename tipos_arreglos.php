<?php
    //Tipos de arreglos 

    //Arreglo indexado -> es una coleccion de datos que trabaja con posicion numerica.
    $estudiante = ["Luis", "Rene", "Valeria", "Julio"];
    echo $estudiante[1] . "<br>";

    //Arreglos asociativos => Es una coleccion de datos que trabaja con claves-valor.
    $pais = [
        "pais" => "El Salvador",
        "departamentos" => ["San Salvador", "San Miguel", "San Vicente"],
        "poblacion" => 10000
    ];

    echo $pais["pais"];
    echo $pais["departamentos"][1];
    echo "<h3>Iterando un arreglo asociativo</h3>";
    foreach($pais as $value) {
        if(is_array($value)) {
            echo implode(', ', $value). "<br>";
        }else{
            echo $value . "<br>";
        };
    };

    for($i=0; $i < count($pais); $i++){
        print_r($pais["pais"]. "<br>");
    };

    //arreglo multidimensional => dentro de un arreglo puede haber otro arreglo.
    $numeros = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];

    echo $numeros[1][2];

    $centroamerica =[
        [
        "pais" => "El Salvador",
        "departamentos" => ["San Salvador", "San Miguel", "San Vicente"],
        "poblacion" => 10000
        ],

        [
        "pais" => "Guatemala",
        "departamentos" => ["g"],
        "poblacion" => 100000
        ],
        [
        "pais" => "Honduras",
        "departamentos" => ["h"],
        "poblacion" => 1000000
        ]  
    ];
echo "<h3>Multidimencional</h3>";

echo $centroamerica[0]['poblacion']. "<br>";
foreach($centroamerica as $pais){
    echo $pais["pais"]."<br>";
    echo "<br>Departamentos: " . implode(', ', $pais["departamentos"]). "<br>";
    echo "Poblacion ". $pais["poblacion"];
    /**foreach($pais["departamentos"] as $departamentos){
        echo $departamentos . "<br>";
    }*/
}
?>