<?php namespace Pl\Maikeru\Refactoring\Examples\ReplaceTempWithQuery;

class ExampleTemp extends CommonCodeExample {
    public function getDiscountedPrice()
    {
        return $this->getBasePrice() * $this->getDiscountFactor();
    }
    private function getBasePrice()
    {
        return $this->quantity * $this->itemPrice;
    }
    private function getDiscountFactor()
    {
        $result = 0.98;
        if ($this->getBasePrice() > 10000) {
            $result = 0.9;
        }
        elseif ($this->getBasePrice() > 1000) {
            $result = 0.95;
        }
        return $result;
    }
}
