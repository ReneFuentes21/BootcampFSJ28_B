<?php

function busquedaLineal($array, $numero){
    //iterar arreglo
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == $numero){
            return $array[$i];
        }

        return -1;
    }

    $resultado = busquedaLineal([12,34,100,23,5],23);
    if($resultadoc != -1){
        echo "Numero encontrado" . $resultado;
    }else{
        echo "No existe en la lista";
    };
}

