<?php namespace Pl\Maikeru\Refactoring\Examples\ExtractMethod;
// example without local variables
class ExampleStep1 extends ExampleCommonCode {
    public function printOwing($previousAmount)
    {
        $e = $this->orders;
        $outstanding = $previousAmount * 2;

        $this->printBanner();

        // oblicz naleznosc
        foreach ($e as $each) {
            $outstanding += $each->getAmount();
        }


      // print details
      print "\nnazwisko: " . $this->name;
      print "\nkwota: " . $outstanding;
      print "\n***************************";
    }
    private function printBanner()
    {
        print "\n***************************";
        print "\n**** Klient jest winny ****";
        print "\n***************************";
    }
}