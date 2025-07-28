<?php

function quickSort($array){

    if(count($array) > 0){
        //proceso de quicksort
        $pivote = $array[0];
        $left = [];
        $rigth = [];

        for($i = 1; $i < count($array); $i++){
            //condiciones en donde se colocaran los elementos
            if($array[$i] < $pivote){
                //se agrega a la izquierda
                array_push($left, $array[$i]);
            }else{
                array_push($rigth, $array[$i]);
            };
        };
        return array_merge(quickSort($left), array($pivote), quickSort($rigth));
    }else{
        return $array;
    }
};

print_r(quickSort([12,34,2,10,8]));