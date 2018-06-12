<?php

use app\LowHigh;

require '../vendor/autoload.php';

$arreglo = [3,1,2,5,8,9,6,3,1,4,5,78,55,0,200];

$Ordering = new LowHigh($arreglo);

$Ordering->Ordering();

$Ordering->display();