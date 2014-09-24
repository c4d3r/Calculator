<?php
namespace Maxim\Calculator\Operation;


class MultiplyOperation extends Operation
{
    public function calculate()
    {
        return $this->number1 * $this->number2;
    }
} 