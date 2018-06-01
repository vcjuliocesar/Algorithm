<?php

$number_random = [3,1,2,5,8,9,6,3,1,4,5,78,55,0,200];

print_r(orderingLowHigh($number_random));

function orderingLowHigh($numbers)
{
    for($i = 0; $i < count($numbers); $i++) {

        for($j = 0; $j < count($numbers); $j++) {

            if($numbers[$i] < $numbers[$j]) {
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$j];
                $numbers[$j] = $temp;
            }
        }
    }

    return $numbers;
}