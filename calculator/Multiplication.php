<?php

require_once "Calculator.php";

class Multiplication extends Calculator
{

    /** Multiplication of two given numbers.
     * @param $left
     * @param $right
     * @return float|int
     */
    public function execute($left, $right):float|int
    {
        return  $left * $right;
    }
}