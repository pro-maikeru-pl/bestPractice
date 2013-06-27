<?php namespace Pl\Maikeru\Refactoring\Examples\ReplaceMethodWithMethodObject;

class ExampleAfter extends CommonCodeExample {

    public function getNewFactor($eFactor, $quality) {
        $newFactor = new NewFactor($this, $eFactor, $quality);
        return $newFactor->compute();
    }




    public function getQualitySubtractor()
    {
        return $this->qualitySubtractor;
    }
}
