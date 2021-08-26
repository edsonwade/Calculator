<?php

require_once "Calculator.php";

class Division extends Calculator
{

    public function execute($left, $right)
    {
        return $left / $right;
    }

}