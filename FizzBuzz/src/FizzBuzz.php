<?php
namespace App;

class FizzBuzz {
    private $number;
    private $message;
    
    public function __construct($number)
    {
        $this->number = $number;
    }

    public function NumberFizzBuzz()
    {
        for($n=1; $n <= $this->number; $n++) {
            if($n % 15 == 0) {
                $this->setMessage("FizzBuzz");
            }

            if($n % 3 == 0){
                $this->setMessage("Fizz");
            }
            
            if($n % 5 == 0){
                $this->setMessage("Buzz");
            }
            $this->setMessage($n);
        }
    }

    private function setMessage($message) 
    {
        $this->message .= $message."<br>";
    }

    public function PrintMe() 
    {
        echo $this->message;
    }

 }