<?php
namespace Maxim\Calculator\Operation;


abstract class Operation
{
    protected $number1, $number2;

    public function __construct($number1, $number2)
    {
        $this->setNumber1($number1);
        $this->setNumber2($number2);
    }

    /**
     * @param mixed $number1
     */
    public function setNumber1($number1)
    {
        //TODO: Validate number1
        $this->number1 = $number1;
    }

    /**
     * @param mixed $number2
     */
    public function setNumber2($number2)
    {
        //TODO: Validate number2
        $this->number2 = $number2;
    }

    public abstract function calculate();
}