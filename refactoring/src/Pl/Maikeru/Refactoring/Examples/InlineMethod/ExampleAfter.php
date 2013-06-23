<?php namespace Pl\Maikeru\Refactoring\Examples\InlineMethod;

class ExampleAfter extends CommonCodeExample {
    public function getRating()
    {
        return ($this->moreThanFiveLateDeliveries()) ? self::BAD_RATING : self::GOOD_RATING;
    }
    private function moreThanFiveLateDeliveries() { // wiecej niz piec spoznionych dostaw
        return ($this->lateDeliveries > 5);
    }
}
