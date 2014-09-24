<?php
namespace Maxim\Calculator;


class Calculator
{
    private $terms;

    public function __construct($terms)
    {
        $this->setTerms($terms);
    }

    public function solve()
    {
        $terms = $this->terms;
        //*, / and % are first processed
        $operationFactory = new OperationFactory();

        foreach($terms as $key => $term)
        {
            if(!in_array($term, array('*', '/', '%')))
                continue;

            $terms[$key] = $operationFactory->solveOperation($term, $terms[$key - 1], $terms[$key + 1])->calculate();

            //remove keys of already calculated tupels, first +1, then -1
            array_splice($terms, $key + 1, 1);
            array_splice($terms, $key - 1, 1);
        }

        // + en -
        foreach($terms as $key => $term)
        {
            if(!in_array($term, array('+', '-')))
                continue;

            $terms[$key] = $operationFactory->solveOperation($term, $terms[$key - 1], $terms[$key + 1])->calculate();

            //remove keys of already calculated tupels, first +1, then -1
            array_splice($terms, $key + 1, 1);
            array_splice($terms, $key - 1, 1);
        }

        // solution should now be in first element of the array
        return $terms[0];
    }

    public function setTerms($terms)
    {
        if(!preg_match("/[0-9*%+-]/", implode($terms)))
            die("Terms didn't contain correct values");
        $this->terms = $terms;
    }
} 