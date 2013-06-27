<?php namespace Pl\Maikeru\Refactoring\Examples\ReplaceTempWithQuery;

class ExampleBefore extends CommonCodeExample {
    public function getDiscountedPrice()
    {
        $basePrice = $this->quantity * $this->itemPrice;
        $discountFactor = 0.98;
        if ($basePrice > 10000) {
            $discountFactor = 0.9;
        }
        elseif ($basePrice > 1000) {
            $discountFactor = 0.95;
        }
        return $basePrice * $discountFactor;
    }
}
