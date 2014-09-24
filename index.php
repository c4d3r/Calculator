<?php
use Maxim\Calculator\Calculator;

function __autoload($class) {
    include(str_replace("Maxim\\Calculator\\", "", $class . ".php"));
}

$input = array(1, '+', 2, '*', 8);
//$input = array(5, '-', 6);

$calculator = new Calculator(
    $input
);

echo $calculator->solve();