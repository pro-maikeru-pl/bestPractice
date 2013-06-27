<?php namespace Pl\Maikeru\Refactoring\Examples\ReplaceMethodWithMethodObject;

class ExampleBefore extends CommonCodeExample {

    public function getNewFactor($eFactor, $quality) {
        $qFactor = $this->getQualitySubtractor() - $quality;
        $eFactorFloor = 1.3 + $quality;
        $newFactor = $eFactor + (0.1 - $qFactor * (0.08 + $qFactor * 0.02));
        if ($newFactor < $eFactorFloor) {
            $newFactor = $eFactorFloor * 2;
        } else {
            $newFactor = $eFactorFloor * 5;
        }
        return $newFactor;
    }




    public function getQualitySubtractor()
    {
        return $this->qualitySubtractor;
    }
}
