<?php


function bubblesort($array){
    $swap = 0;
    for($i = 0; $i < count($array); $i++){
        //segundo bucle para volver a entrar hacer los cambios
        for($j = 0; $j < count($array) - 1; $j++){
            //evaluar posicion actual vs posicion siguiente
            if($array[$j] > $array[$j + 1]){
                $temporal = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temporal;

                $swap++;
            };

        };

    };
    print_r($array);
};

bubblesort([12,34,2,10,8]);