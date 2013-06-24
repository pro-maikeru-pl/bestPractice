<?php namespace Pl\Maikeru\Refactoring\Tests\InlineMethod;
use Pl\Maikeru\Refactoring\Examples\InlineMethod\ExampleBefore;
use Pl\Maikeru\Refactoring\Examples\InlineMethod\ExampleTemp;
use Pl\Maikeru\Refactoring\Examples\InlineMethod\ExampleAfter;

class ExampleTest extends \PHPUnit_Framework_TestCase {
    /**
     * @test
     * @group original
     * @dataProvider provider
     */
    public function beforeRefactoring($lateDeliveries, $rating)
    {
        $example = new ExampleBefore($lateDeliveries);
        $this->assertSame($rating, $example->getRating());
    }
    /**
     * @test
     *
     * @dataProvider provider
     */
    public function afterRefactoring($lateDeliveries)
    {
        $exampleBefore = new ExampleBefore($lateDeliveries);
        $exampleTemp = new ExampleTemp($lateDeliveries);
        $exampleAfter = new ExampleAfter($lateDeliveries);
        $this->assertSame($exampleBefore->getRating(), $exampleAfter->getRating());
        $this->assertSame($exampleBefore->getRating(), $exampleTemp->getRating());
    }
    public function provider()
    {
        return array(
            array(0, ExampleBefore::GOOD_RATING),
            array(4, ExampleBefore::GOOD_RATING),
            array(5, ExampleBefore::GOOD_RATING),
            array(6, ExampleBefore::BAD_RATING),
            array(100, ExampleBefore::BAD_RATING),
        );
    }
}