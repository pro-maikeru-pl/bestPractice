<?php namespace Pl\Maikeru\Refactoring\Examples\InlineTemp;

class ExampleBefore extends CommonCodeExample {
    public function isExpensive()
    {
        $basePrice = $this->order->getBasePrice();
        return ($basePrice > self::EXPENSIVE_THRESHOLD);
    }
}
