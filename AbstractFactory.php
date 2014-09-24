<?php
/**
 * Created by PhpStorm.
 * User: Maxim
 * Date: 24/09/2014
 * Time: 15:42
 */

namespace Maxim\Calculator;


interface AbstractFactory
{
    public function solveOperation($terms, $number1, $number2);
} 