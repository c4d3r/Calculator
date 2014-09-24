<?php
namespace Maxim\Calculator\Operation;


class AddOperation extends Operation
{
    public function calculate()
    {
        return $this->number1 + $this->number2;
    }
} 