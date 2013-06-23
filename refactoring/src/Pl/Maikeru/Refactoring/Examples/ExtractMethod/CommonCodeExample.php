<?php namespace Pl\Maikeru\Refactoring\Examples\ExtractMethod;

abstract class CommonCodeExample {
    protected $name;
    protected $orders = array();

    // prepare some dummy data:
    public function __construct($name, $orders)
    {
        $this->name = $name;
        foreach ($orders as $orderValue) {
            $this->orders[] = new OrderElement($orderValue);
        }
    }
    // this is method under refactoring:
    abstract public function printOwing($previousAmount);
}