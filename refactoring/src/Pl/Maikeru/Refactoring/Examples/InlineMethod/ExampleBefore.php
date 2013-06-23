<?php namespace Pl\Maikeru\Refactoring\Examples\InlineMethod;

class ExampleBefore extends CommonCodeExample {
    public function getRating()
    {
        return ($this->lateDeliveries > 5) ? self::BAD_RATING : self::GOOD_RATING;
    }
}
