<?php namespace Pl\Maikeru\Refactoring\Examples\ExtractMethod;
// example with local variables
class ExampleStep2 extends CommonCodeExample {
    public function printOwing($previousAmount)
    {
        $outstanding = $previousAmount * 2;
        $this->printBanner();
        // oblicz naleznosc
        foreach ($this->orders as $each) {
            $outstanding += $each->getAmount();
        }
        $this->printDetails($outstanding);
    }


    private function printBanner()
    {
        print "\n***************************";
        print "\n**** Klient jest winny ****";
        print "\n***************************";
    }
    private function printDetails($outstanding)
    {
        print "\nnazwisko: " . $this->name;
        print "\nkwota: " . $outstanding;
        print "\n***************************";
    }
}