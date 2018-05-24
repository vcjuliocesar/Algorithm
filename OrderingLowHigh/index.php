<?php

$arreglo = [3,1,2,5,8,9,6,3,1,4,5,78,55,0,200];

print_r(Ordering($arreglo));

function Ordering($array)
{
    for($i = 0; $i < count($array); $i++) {
        for($j = 0; $j < count($array); $j++) {
            if($array[$i] < $array[$j]){
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp; 
            }
        }
    }
    return $array;
}