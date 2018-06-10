<?php
namespace app;

/**
 * Class FizzBuzz
 *
 * @package FizzBuzz
 * @author Julio Cesar <tu@gmail.com>
 */
class FizzBuzz {

    /**
     * @var integer
     */
    private $number;

    /**
     * FizzBuzz constructor.
     * @param $number
     * @type integer
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function convert()
    {
        $result = '';

        for($i=1; $i <= $this->number; $i++) {

            if ($this->isDivisibleBy($i,15 )) {
                $result .= 'fizzBuzz'.$i."<br>";
            }

            if ($this->isDivisibleBy($i,3 )) {
                $result .= 'fizz'.$i."<br>";
            }

            if ($this->isDivisibleBy($i,5)) {
                $result .= 'buzz'.$i."<br>";
            }
        }

        return $result;
    }

    /**
     * @param  int  $dividend
     * @param  int  $number
     * @return boolean
     */
    public function isDivisibleBy($number, $dividend)
    {
        return $number % $dividend === 0;
    }
 }