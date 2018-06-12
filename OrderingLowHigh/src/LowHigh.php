<?php
namespace app;

class LowHigh
{
    /**
     * @var array
     */
    private $numbers = [];

    /**
     * LowHigh constructor.
     * @param array $numbers
     */
    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * Ordena  numeros de menos a mayor
     * @return array
     */
    public function ordering()
    {
        for($i = 0; $i < count($this->numbers); $i++) {
            for($j = 0; $j < count($this->numbers); $j++) {
                if($this->numbers[$i] < $this->numbers[$j]){
                    $temp = $this->numbers[$i];
                    $this->numbers[$i] = $this->numbers[$j];
                    $this->numbers[$j] = $temp;
                }
            }
        }

        return $this->numbers;
    }

    /**
     * imprime con "formato" el arreglo
     * @return void
     */
    public function display()
    {
        foreach ($this->ordering() as $data){
         echo $data.' ';
        }
    }
}