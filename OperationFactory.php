<?php
namespace Maxim\Calculator;


use Maxim\Calculator\Operation\AddOperation;
use Maxim\Calculator\Operation\SubtractOperation;
use Maxim\Calculator\Operation\DivisionOperation;
use Maxim\Calculator\Operation\ModulusOperation;
use Maxim\Calculator\Operation\MultiplyOperation;

class OperationFactory implements AbstractFactory
{
    /**
     * @param $term
     * @param $number1
     * @param $number2
     * @return \Maxim\Calculator\Operation\Operation
     */
    public function solveOperation($term, $number1, $number2)
    {
        switch($term)
        {

            case '-': return new SubtractOperation($number1, $number2);
            case '+': return new AddOperation($number1, $number2);
            case '*': return new MultiplyOperation($number1, $number2);
            case '/': return new DivisionOperation($number1, $number2);
            case '%': return new ModulusOperation($number1, $number2);
            default: return new AddOperation($number1, $number2);
        }
    }
} 