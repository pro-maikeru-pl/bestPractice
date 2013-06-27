<?php namespace Pl\Maikeru\Refactoring\Tests\ReplaceTempWithQuery;
use Pl\Maikeru\Refactoring\Examples\ReplaceTempWithQuery\Order;
use Pl\Maikeru\Refactoring\Examples\ReplaceTempWithQuery\ExampleBefore;
use Pl\Maikeru\Refactoring\Examples\ReplaceTempWithQuery\ExampleTemp;
use Pl\Maikeru\Refactoring\Examples\ReplaceTempWithQuery\ExampleStep1;
use Pl\Maikeru\Refactoring\Examples\ReplaceTempWithQuery\ExampleStep2AfterExtractMethod;

class ExampleTest extends \PHPUnit_Framework_TestCase {
    /**
     * @test
     * @group original
     * @dataProvider provider
     */
    public function beforeRefactoring($quantity, $itemPrice, $expectedDiscountedPrice)
    {
        $example = new ExampleBefore($quantity, $itemPrice);
        $this->assertEquals($expectedDiscountedPrice, $example->getDiscountedPrice(), 'Equals with precision', 0.00001);
    }
    /**
     * @test
     *
     * @dataProvider provider
     */
    public function afterRefactoring($quantity, $itemPrice)
    {
        $exampleBefore = new ExampleBefore($quantity, $itemPrice);
        $exampleTemp = new ExampleTemp($quantity, $itemPrice);
        $exampleStep1 = new ExampleStep1($quantity, $itemPrice);
        $exampleAfter = new ExampleStep2AfterExtractMethod($quantity, $itemPrice);
        $this->assertEquals($exampleBefore->getDiscountedPrice(), $exampleTemp->getDiscountedPrice(), 'Equals with precision', 0.00001);
        $this->assertEquals($exampleBefore->getDiscountedPrice(), $exampleStep1->getDiscountedPrice(), 'Equals with precision', 0.00001);
        $this->assertEquals($exampleBefore->getDiscountedPrice(), $exampleAfter->getDiscountedPrice(), 'Equals with precision', 0.00001);
    }
    public function provider()
    {
        return array(
            array(0, 0, 0),
            array(1, 0.5, 0.49),
            array(100, 3, 294.0),
            array(999, 0.5, 489.51),
            array(999, 0.9, 881.118),
            array(999, 1, 979.02),
            array(1000, 0.9, 882),
            array(1000, 1, 980),
            array(1000, 0.5, 490),
            array(1001, 0.9, 882.882),
            array(1001, 1, 950.95),
            array(1005, 2000.5, 1809452.25),
            array(9999, 1, 9499.05),
            array(10000, 1, 9500),
            array(10001, 1, 9000.9),

        );
    }
}