<?php

function bubbleSort($array){
    uasort($array,function($a,$b){
        if($a== $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    });
    return $array;
}

$desordenado = [6,2,1,3,4,7,5];
echo implode(",",$desordenado). "<br>";
$ordenado = bubbleSort($desordenado);
echo implode(",",$ordenado). "<br>";