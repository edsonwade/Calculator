<?php

require_once "Calculator.php";

class Division extends Calculator
{

    public function execute($left, $right): float|int
    {
        if (!(is_numeric($left) && is_numeric($right)))
            echo "the value inserted is not a number ... try again";

        else return $left / $right;
    }

}