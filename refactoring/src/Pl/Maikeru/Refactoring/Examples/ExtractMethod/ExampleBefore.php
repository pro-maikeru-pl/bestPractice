<?php namespace Pl\Maikeru\Refactoring\Examples\ExtractMethod;

class ExampleBefore extends ExampleCommonCode {
    public function printOwing($previousAmount)
    {
        $e = $this->orders;
        $outstanding = $previousAmount * 2;

        // wyswietl naglowek
        print "\n***************************";
        print "\n**** Klient jest winny ****";
        print "\n***************************";

        // oblicz naleznosc
        foreach ($e as $each) {
            $outstanding += $each->getAmount();
        }


      // print details
      print "\nnazwisko: " . $this->name;
      print "\nkwota: " . $outstanding;
      print "\n***************************";
    }
}