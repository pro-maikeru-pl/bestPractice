<?php namespace Pl\Maikeru\Refactoring\Examples\InlineTemp;

class ExampleAfter extends CommonCodeExample {
    public function isExpensive()
    {
        return ($this->order->getBasePrice() > self::EXPENSIVE_THRESHOLD);
    }
}
