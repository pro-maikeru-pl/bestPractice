<?php namespace Pl\Maikeru\Refactoring\Tests\InlineTemp;
use Pl\Maikeru\Refactoring\Examples\InlineTemp\Order;
use Pl\Maikeru\Refactoring\Examples\InlineTemp\ExampleBefore;
use Pl\Maikeru\Refactoring\Examples\InlineTemp\ExampleTemp;
use Pl\Maikeru\Refactoring\Examples\InlineTemp\ExampleAfter;

class ExampleTest extends \PHPUnit_Framework_TestCase {
    /**
     * @test
     * @group original
     * @dataProvider provider
     */
    public function beforeRefactoring($basePrice, $isExpensive)
    {
        $example = new ExampleBefore(new Order($basePrice));
        $this->assertSame($isExpensive, $example->isExpensive());
    }
    /**
     * @test
     *
     * @dataProvider provider
     */
    public function afterRefactoring($basePrice, $isExpensive)
    {
        $exampleBefore = new ExampleBefore(new Order($basePrice));
        $exampleTemp = new ExampleBefore(new Order($basePrice));
        $exampleAfter = new ExampleTemp(new Order($basePrice));
        $this->assertSame($exampleBefore->isExpensive(), $exampleTemp->isExpensive());
        $this->assertSame($exampleBefore->isExpensive(), $exampleAfter->isExpensive());
    }
    public function provider()
    {
        return array(
            array(0, false),
            array(50, false),
            array(999, false),
            array(ExampleBefore::EXPENSIVE_THRESHOLD, false),
            array(ExampleBefore::EXPENSIVE_THRESHOLD + 1, true),
            array(10000, true),
        );
    }
}