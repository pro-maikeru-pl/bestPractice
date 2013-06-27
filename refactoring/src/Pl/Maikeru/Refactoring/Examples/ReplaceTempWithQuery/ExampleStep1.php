<?php namespace Pl\Maikeru\Refactoring\Examples\ReplaceTempWithQuery;

class ExampleStep1 extends CommonCodeExample {
    public function getDiscountedPrice()
    {
        $discountFactor = 0.98;
        if ($this->getBasePrice() > 10000) {
            $discountFactor = 0.9;
        }
        elseif ($this->getBasePrice() > 1000) {
            $discountFactor = 0.95;
        }
        return $this->getBasePrice() * $discountFactor;
    }







    private function getBasePrice()
    {
        return $this->quantity * $this->itemPrice;
    }
}
