<?php namespace Pl\Maikeru\Refactoring\Tests\ExtractMethod;
use Pl\Maikeru\Refactoring\Examples\ExtractMethod\ExampleBefore;
use Pl\Maikeru\Refactoring\Examples\ExtractMethod\ExampleStep1;
use Pl\Maikeru\Refactoring\Examples\ExtractMethod\ExampleStep2;

class ExampleBeforeTest extends \PHPUnit_Framework_TestCase {
    private $previousAmount = array();
    private $exampleBefore = array();
    private $expectedOutput = array();
    public function setUp()
    {
        $this->exampleBefore[0] = new ExampleBefore("John Doe", array(400, 10, 345));
        $this->previousAmount[0] = 50;
        $this->exampleStep1[0] = new ExampleStep1("John Doe", array(400, 10, 345));
        $this->exampleStep2[0] = new ExampleStep2("John Doe", array(400, 10, 345));
        $this->expectedOutput[0] = <<<EOT

***************************
**** Klient jest winny ****
***************************
nazwisko: John Doe
kwota: 855
***************************
EOT;

        $this->exampleBefore[1] = new ExampleBefore("Foo Bar", array(10, 11, 27));
        $this->previousAmount[1] = 0;
        $this->expectedOutput[1] = <<<EOT

***************************
**** Klient jest winny ****
***************************
nazwisko: Foo Bar
kwota: 48
***************************
EOT;
    }
    /**
     * @test
     * @group original
     */
    public function printOwing_beforeRefactoring()
    {
        $this->expectOutputString($this->expectedOutput[0]);
        $this->exampleBefore[0]->printOwing($this->previousAmount[0]);
    }
    /**
     * @test
     * @group original
     */
    public function printOwing_beforeRefactoring2()
    {
        $this->expectOutputString($this->expectedOutput[1]);
        $this->exampleBefore[1]->printOwing($this->previousAmount[1]);
    }
    /**
     * @test
     */
    public function shouldNotChangeBahaviourAfterStep1Refactoring()
    {
        $this->expectOutputString($this->expectedOutput[0]);
        $this->exampleStep1[0]->printOwing($this->previousAmount[0]);
    }
    /**
     * @test
     */
    public function shouldNotChangeBahaviourAfterStep2Refactoring()
    {
        $this->expectOutputString($this->expectedOutput[0]);
        $this->exampleStep2[0]->printOwing($this->previousAmount[0]);
    }
}
