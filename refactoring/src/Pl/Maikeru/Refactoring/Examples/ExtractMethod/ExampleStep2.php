<?php namespace Pl\Maikeru\Refactoring\Examples\ExtractMethod;
// example with local variables
class ExampleStep2 extends ExampleCommonCode {
    public function printOwing($previousAmount)
    {
        $e = $this->orders;
        $outstanding = $previousAmount * 2;

        $this->printBanner();

        // oblicz naleznosc
        foreach ($e as $each) {
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