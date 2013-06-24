<?php namespace Pl\Maikeru\Refactoring\Examples\InlineTemp;

class ExampleTemp extends CommonCodeExample {
    public function isExpensive()
    {
        $basePrice = $this->order->getBasePrice();
        return ($basePrice > self::EXPENSIVE_THRESHOLD);
    }
}
