<?php

require_once "Calculator.php";
require_once "Addition.php";
require_once "Subtract.php";
require_once "Division.php";
require_once "Multiplication.php";



$sum = new Addition();
$sub = new Subtract();
$div = new Division();
$mult= new Multiplication();


echo " Result = " . $sum->execute(12.23,45);
echo "\n";
echo " Result = " . $sub->execute(12,4);
echo "\n";
echo " Result = " . $div->execute(45,4);
echo "\n";
echo " Result = " . $mult->execute(12,4);