<?php

require_once "Calculator.php";

class Subtract extends Calculator
{


    public function execute($left, $right)
    {
        return $left - $right;
    }
}