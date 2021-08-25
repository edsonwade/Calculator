<?php

require_once "Calculator.php";

class Subtract extends Calculator
{

    public function execute($left, $right): int|float
    {

        if (!(is_numeric($left) && is_numeric($right)))
            echo "the value inserted is not a number ... try again";

        else return $left - $right;
    }

}