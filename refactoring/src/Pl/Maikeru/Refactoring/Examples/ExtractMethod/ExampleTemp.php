<?php namespace Pl\Maikeru\Refactoring\Examples\ExtractMethod;

class ExampleTemp extends CommonCodeExample {
    public function printOwing($previousAmount)
    {
        $outstanding = $previousAmount * 2;
        // wyswietl naglowek
        print "\n***************************";
        print "\n**** Klient jest winny ****";
        print "\n***************************";
        // oblicz naleznosc
        foreach ($this->orders as $each) {
            $outstanding += $each->getAmount();
        }
        // print details
        print "\nnazwisko: " . $this->name;
        print "\nkwota: " . $outstanding;
        print "\n***************************";
    }
}