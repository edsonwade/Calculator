<?php

require_once "Calculator.php";

class Addition extends Calculator
{
    /**
     * Addition of two given numbers
     * @param $left
     * @param $right
     * @return float|int
     */
    public function execute($left, $right): float|int
    {
        return $left + $right;

    }

}


