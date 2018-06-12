<?php
namespace App;

class LowHigh
{
    private $array = [];

    public function __construct(array $array)
    {
        $this->array=$array;
    }

    public function Ordering()
    {
        for($i = 0; $i < count($this->array); $i++) {
            for($j = 0; $j < count($this->array); $j++) {
                if($this->array[$i] < $this->array[$j]){
                    $temp = $this->array[$i];
                    $this->array[$i] = $this->array[$j];
                    $this->array[$j] = $temp; 
                }
            }
        }
    }

    private function output()
    {
        return $this->array;
    }

    public function display()
    {
        print_r($this->output());
    }


}