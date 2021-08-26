<?php

require_once "Calculator.php";

class Addition extends Calculator
{

    public function execute($left, $right)
    {
          return $left + $right;

    }

}


