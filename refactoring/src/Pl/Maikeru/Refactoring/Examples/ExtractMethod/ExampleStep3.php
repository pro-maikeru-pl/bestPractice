<?php namespace Pl\Maikeru\Refactoring\Examples\ExtractMethod;
// example when local variable changes
class ExampleStep3 extends CommonCodeExample {
    public function printOwing($previousAmount)
    {
        $this->printBanner();
        $outstanding = $this->getOutstanding($previousAmount * 2);
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
    private function getOutstanding($initialValue)
    {
        $result = $initialValue;
        foreach ($this->orders as $each) {
            $result += $each->getAmount();
        }
        return $result;
    }
}