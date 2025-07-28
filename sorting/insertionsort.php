<?php 

function insertionSort($array){
    for($i = 0; $i < count($array); $i++){
        $punto_interseccion = $array[$i];
        $j = $i - 1;

        while($j >= 0 && $punto_interseccion < $array[$j]){
            $array[$j + 1] = $array[$j];
            $array[$j] = $punto_interseccion;
            $j = $j - 1;
        };
    };
    print_r($array);
};


insertionSort([12,34,2,10,8]);