<?php
function busquedaBinaria($array,$numero){
    $inicio = 0;
    $fin = count($array) - 1;

    while($inicio <= $fin){
        $posicion_enmedio = intval(($inicio + $fin) / 2);
        
        if($array[$posicion_enmedio] == $numero){
            return $posicion_enmedio;
        }

        if($array[$posicion_enmedio] > $numero){
            $fin = $posicion_enmedio - 1; 
        }else{
            $inicio = $posicion_enmedio + 1;
        };
    };
};

print_r(busquedaBinaria([1,2,3,4,5,10],1));