<?php
 FizzBuzz();

 function FizzBuzz()
 {
    for($n=1; $n <= 100; $n++) {
       if($n % 15 == 0) {
           echo "FizzBuzz<br>";
       }else if($n % 3 == 0){
           echo "Fizz<br>";
       }else if($n % 5 == 0){
           echo "Buzz<br>";
       }else{
           echo $n."<br>";
       }
    }
 }