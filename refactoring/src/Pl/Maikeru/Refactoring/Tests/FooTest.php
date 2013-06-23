<?php namespace Pl\Maikeru\Refactoring\Tests;
use Pl\Maikeru\Refactoring\Examples\Foo;

class FooTest extends \PHPUnit_Framework_TestCase {
    /**
     * @test
     */
    public function add_shouldAddTwoNumbers()
    {
        $foo = new Foo();
        $this->assertEquals(5, $foo->add(2, 3));
    }
}
