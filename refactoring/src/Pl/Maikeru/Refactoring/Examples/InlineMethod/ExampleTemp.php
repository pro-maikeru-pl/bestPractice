<?php namespace Pl\Maikeru\Refactoring\Examples\InlineMethod;

class ExampleTemp extends CommonCodeExample {
    public function getRating()
    {
        return ($this->moreThanFiveLateDeliveries()) ? self::BAD_RATING : self::GOOD_RATING;
    }
    private function moreThanFiveLateDeliveries() { // wiecej niz piec spoznionych dostaw
        return ($this->lateDeliveries > 5);
    }
    // another example of the method that does not make sense
    private function trimString($str)
    {
        return trim($str);
    }
}
