<?php namespace Pl\Maikeru\Refactoring\Examples\InlineTemp;

abstract class CommonCodeExample {
    protected $order;
    const EXPENSIVE_THRESHOLD = 1000;
    public function __construct($order)
    {
        $this->order = $order;
    }
    abstract public function isExpensive();
}