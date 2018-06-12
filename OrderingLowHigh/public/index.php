<?php

use app\LowHigh;

require '../vendor/autoload.php';

$numbers = [3,1,2,5,8,9,6,3,1,4,5,78,55,0,200];

$ordering = new LowHigh($numbers);

$ordering->display();