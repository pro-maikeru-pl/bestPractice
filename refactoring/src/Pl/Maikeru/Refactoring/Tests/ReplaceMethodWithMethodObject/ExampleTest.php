<?php namespace Pl\Maikeru\Refactoring\Tests\ReplaceMethodWithMethodObject;
use Pl\Maikeru\Refactoring\Examples\ReplaceMethodWithMethodObject\ExampleBefore;
use Pl\Maikeru\Refactoring\Examples\ReplaceMethodWithMethodObject\ExampleTemp;
use Pl\Maikeru\Refactoring\Examples\ReplaceMethodWithMethodObject\ExampleAfter;
use Pl\Maikeru\Refactoring\Examples\ReplaceMethodWithMethodObject\ExampleAfterWithSecondObjectAlsoRefactored;

class ExampleTest extends \PHPUnit_Framework_TestCase {
    /**
     * @test
     * @group original
     * @dataProvider provider
     */
    public function beforeRefactoring($eFactor, $quality, $expectedNewFactor)
    {
        $example = new ExampleBefore();
        $this->assertSame($expectedNewFactor, $example->getNewFactor($eFactor, $quality));
    }
    /**
     * @test
     *
     * @dataProvider provider
     */
    public function afterRefactoring($eFactor, $quality, $expectedNewFactor)
    {
        $exampleBefore = new ExampleBefore();
        $exampleTemp = new ExampleTemp();
        $exampleAfter = new ExampleAfter();
        $exampleAfter2 = new ExampleAfterWithSecondObjectAlsoRefactored();
        $this->assertSame($exampleBefore->getNewFactor($eFactor, $quality), $exampleTemp->getNewFactor($eFactor, $quality));
        $this->assertSame($exampleBefore->getNewFactor($eFactor, $quality), $exampleAfter->getNewFactor($eFactor, $quality));
        $this->assertSame($exampleBefore->getNewFactor($eFactor, $quality), $exampleAfter2->getNewFactor($eFactor, $quality));
    }
    public function provider()
    {
        return array(
            array(0, 4, 10.6),
            array(4, 7, 16.6),
            array(5, 11, 24.6),
            array(6, 5.5, 13.6),
            array(100, 1, 11.5),
        );
    }
}