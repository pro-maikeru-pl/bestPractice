<?php namespace Pl\Maikeru\Refactoring\Examples\ReplaceTempWithQuery;

abstract class CommonCodeExample {
    protected $itemPrice;
    protected $quantity;
    const SMALL_DISCOUNT_THRESHOLD = 1000;
    const BIG_DISCOUNT_THRESHOLD = 10000;
    public function __construct($itemPrice, $quantity)
    {
        $this->itemPrice = $itemPrice;
        $this->quantity = $quantity;
    }
    abstract public function getDiscountedPrice();
}