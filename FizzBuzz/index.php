<?php
 FizzBuzz();

 function FizzBuzz()
 {
    for($n = 1; $n <= 100; $n++) {

        $output = '';

        if($n % 3 === 0) {
            $output .= 'Fizz';
       }

       if($n % 5 === 0) {
           $output .= 'Buzz';
       }

        if (!$output) {
            $output = $n;
        }

        echo $output . "\n";
    }
 }