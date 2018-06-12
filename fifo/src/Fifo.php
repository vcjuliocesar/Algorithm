<?php
namespace App;

class Fifo 
{
    private $fifo = [];
    private $size;
    protected $label; 

    public function __construct(int $size = null)
    {
        $this->size = $size;
    } 

    public function addElement($element)
    {
        array_push($this->fifo,$element);
    }

    private function returnFirtElement()
    {
        if($this->isEmpty()) {
            return $this->fifo[0];
        }   

        return null;
    }

    public function deleteFirstElement()
    {
        if($this->isEmpty()) {
           return array_shift($this->fifo);
        }

        return null;
    }

    protected function isEmpty()
    {
        return ! empty($this->fifo);
    }

    private function render()
    {
        return $this->fifo;
    } 

    public function display()
    {
        print_r(['First Element'=>$this->returnFirtElement(),
                 'result'=>$this->render()]
                );
    } 


}