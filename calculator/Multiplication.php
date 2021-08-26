<?php

require_once "Calculator.php";

class Multiplication extends Calculator
{


    public function execute($left, $right)
    {
       return $left * $right;
    }
}