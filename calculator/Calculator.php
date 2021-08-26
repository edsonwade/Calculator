<?php


abstract class Calculator
{
    protected float $result;

    /**
     * function to be implemented by the subclasses.
     * @param $left
     * @param $right
     *
     */
    public abstract function execute($left, $right):float|int;
}