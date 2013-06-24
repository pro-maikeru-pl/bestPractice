<?php

namespace Pl\Maikeru\Refactoring\Examples\InlineTemp;


class Order {
    private $basePrice;
    public function __construct($basePrice)
    {
        $this->basePrice = $basePrice;
    }
    public function getBasePrice()
    {
        return $this->basePrice;
    }
}