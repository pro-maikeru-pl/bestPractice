<?php namespace Pl\Maikeru\Refactoring\Tests\InlineMethod;
use Pl\Maikeru\Refactoring\Examples\InlineMethod\ExampleBefore;
use Pl\Maikeru\Refactoring\Examples\InlineMethod\ExampleAfter;

class ExampleTest extends \PHPUnit_Framework_TestCase {
    /**
     * @test
     * @group original
     */
    public function beforeRefactoring()
    {
        $example = new ExampleBefore(13);
        $this->assertSame(ExampleBefore::BAD_RATING, $example->getRating());
        $example = new ExampleBefore(2);
        $this->assertSame(ExampleBefore::GOOD_RATING, $example->getRating());
    }
    /**
     * @test
     *
     * @dataProvider provider
     */
    public function getRating_shouldNotBeChangedDuringRefactoring($lateDeliveries)
    {
        $exampleBefore = new ExampleBefore($lateDeliveries);
        $exampleAfter = new ExampleAfter($lateDeliveries);
        $this->assertSame($exampleBefore->getRating(), $exampleAfter->getRating());
    }
    public function provider()
    {
        return array(
            array(0),
            array(4),
            array(5),
            array(6),
            array(100),
        );
    }
}