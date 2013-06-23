<?php namespace Pl\Maikeru\Refactoring\Examples\InlineMethod;

abstract class CommonCodeExample {
    protected $lateDeliveries;
    const GOOD_RATING = 1;
    const BAD_RATING = 2;
    public function __construct($lateDeliveries)
    {
        $this->lateDeliveries = $lateDeliveries;
    }
    abstract public function getRating();
}