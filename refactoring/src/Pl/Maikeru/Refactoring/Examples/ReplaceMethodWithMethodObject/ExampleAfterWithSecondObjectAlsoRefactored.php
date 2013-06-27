<?php namespace Pl\Maikeru\Refactoring\Examples\ReplaceMethodWithMethodObject;

class ExampleAfterWithSecondObjectAlsoRefactored extends CommonCodeExample {

    public function getNewFactor($eFactor, $quality) {
        $newFactor = new NewFactorAfter($this, $eFactor, $quality);
        return $newFactor->compute();
    }




    public function getQualitySubtractor()
    {
        return $this->qualitySubtractor;
    }
}
