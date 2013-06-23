<?php namespace Pl\Maikeru\Refactoring\Examples\ExtractMethod;

class OrderElement
{
    private $amount;
    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount()
    {
        return $this->amount;
    }
}