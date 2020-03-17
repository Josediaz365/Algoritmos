<?php

function quickSort($array)
{
    if(count($array) <= 1){
        return $array;
    }
    else{
        $pivot = $array[0];
        $left = array();
        $right = array();
        for($i = 1; $i < count($array); $i++)
        {
            if($array[$i] < $pivot){
                $izquierda[] = $array[$i];
            }
            else{
                $derecha[] = $array[$i];
            }
        }
        return array_merge(quickSort($left), array($pivot), quickSort($right));
    }
}
$desordenado = [5,3,8,6,2,7];
echo implode(",",$desordenado)." Desordenado<br>";
$ordenado = quickSort($desordenado);
echo implode (",",$ordenado)." Ordenado<br>";