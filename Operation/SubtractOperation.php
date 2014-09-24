<?php
namespace Maxim\Calculator\Operation;


class SubtractOperation extends Operation
{
    public function calculate()
    {
        return $this->number1 - $this->number2;
    }
} 